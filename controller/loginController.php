<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <title>Login</title>
</head>
<body>
    
</body>
</html>

<?php
//Treaer la conecxion realizada
include '../config/conn.php';
//Inicio de sesesion
session_start();

//Verifica si la informacion envia es por medio del metodo POST

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    //Guardar la informacion en las variables

    $usuario = $_POST['user'];
    $contraseña = $_POST['password'];
   //Hacer la validacion en la base de datos
    $validacion = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contraseña'");
    
    //Guardar en la variable $_SESSION el nombre del usuario.
    $_SESSION['user']=$usuario;
    $_SESSION['inicio_session'] = true;

    //Hacer una validacion si la busqueda trajo la informacion.
    if(mysqli_num_rows($validacion)>0){
    header("location: ../view/Ingreso.php");
    exit();
    }else{
        echo "<script>
        Swal.fire({
            title: 'Datos incorrectos',
            text: 'El usuario o contraseña son incorrectos.  Si no esta registrado, por favor hagalo.',
            icon: 'error', 
            timer: 3500,
            timerProgressBar: true,
            showConfirmButton: true
        }).then(function() {
            window.location.href = '/../ModeloVC/view/login.html'; 
        });
        </script>";
    }
}
?>