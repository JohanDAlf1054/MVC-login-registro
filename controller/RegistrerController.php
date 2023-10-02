<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <title>Registro</title>
</head>
<body>
    
</body>
</html>

<?php
//Traer la conecxion de la base de datos.

include '../config/conn.php';

session_start();

//Validar si la informacion envia es por medio del metodo POST
if( $_SERVER ['REQUEST_METHOD'] == 'POST'){
    //Guardar la informacion registrada en el formulario en las varibles definidas.
    $nombre = mysqli_real_escape_string($conn, $_POST['name']);
    $telefono = mysqli_real_escape_string($conn, $_POST['phone']);
    $correo = mysqli_real_escape_string($conn, $_POST['email']);
    $usuario = mysqli_real_escape_string($conn, $_POST['user']);
    $contrasena = mysqli_real_escape_string($conn, $_POST['password']);

    //Hacer la insercion hacia la base de datos.
    $insertar = "INSERT INTO usuarios VALUES( null,'$nombre','$correo','$contrasena','$telefono','$usuario')";

    //Mostarar un mensaje de confirmacion.
    if($conn -> query($insertar)=== TRUE){
        echo "<script>
        Swal.fire({
            title: 'Datos Ingresados correctamente',
            text: 'Registrado correctamenete',
            icon: 'success', 
            timer: 3500,
            timerProgressBar: true,
            showConfirmButton: true
        }).then(function() {
            window.location.href = '/../ModeloVC/view/login.html'; 
        });
        </script>";
        
    }else{
        echo "Error al ingresar el registro: ". $conn ->error;
    }
//Cerrar la conecxion generada
    $conn -> close();
}

?>