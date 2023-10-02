<?php
//Comenzar el inicio de sesion al momento de ingresar.
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/Ingreso.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Has ingresao a la pagina correctamente</h1>
    <h2>Para cerrar sesion presiona aqui....</h2>
    <form action="../controller/LogoutController.php" method="post">
        <input type="submit" value="Cerrar sesion " class="btn_logout" >
    </form>
</body>
</html>