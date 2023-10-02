<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <title>Cierre de sesion</title>
</head>
<body>
    
</body>
</html>
<?php 

session_start();
//Esta sentencia revisa si la sesion del usuario sea verdadera y que se cumpla lo que se encuentra dentro de la sentencia if.
    if(isset($_SESSION['user']) || $_SESSION['user']!== true){
        session_unset();
        session_destroy();
        echo "<script>
            Swal.fire({
            title: 'Cierre Sesion',
            text: 'Secion cerrada correctamente',
            icon: 'success', 
            timer: 3500,
            timerProgressBar: true,
            showConfirmButton: true
        }).then(function() {
            window.location.href = '/../ModeloVC/view/login.html'; 
        });
        </script>";
    }else{
        echo "<script>
        Swal.fire({
            title: 'Un problema',
            text: 'Por favor inicie Sesion',
            icon: 'error', 
            timer: 3500,
            timerProgressBar: true,
            showConfirmButton: true
        }).then(function() {
            window.location.href = '/../ModeloVC/view/login.html'; 
        });
    </script>";
    }

?>