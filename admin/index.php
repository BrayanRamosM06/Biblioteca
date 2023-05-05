<?php
    session_start();
    if (isset($_SESSION['sesion_email'])) {
        echo "existe una session iniciada";
    }else{
        header('Location:..'.$url.'/login');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controller Login</title>
</head>
<body>
    <br><br><br>
    <a href="../login/controllerCerrarSesion.php">Cerrar sesión</a> 
</body>
</html>