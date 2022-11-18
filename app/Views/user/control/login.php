<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location:principal.php");
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="<?= base_url() ?>public/user/css/login.css ">
    
</head>
<body>
    <form action="/login" method="post">
        <h1>DigitalRest</h1>
        <p>Usuario <input REQUIRED type="text" color: red placeholder= "&#128273; Usuario" name="usuario"></p>
        <p>Contraseña <input REQUIRED type="password" placeholder= "&#128274; Contraseña" name="password"></p>
        <br>
      
        <input type="submit" value="Ingresar">
<br>
<br>

<a href="correo.php">¿Olvidaste tu contraseña?</a>
<br>
<br>
<a href="Inicio.php">Regresar</a>
    </form>
</body>
</html>