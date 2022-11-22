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
    <title>Inicio de sesion Empleados</title>
    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
    <form action="/login2" method="post">
        <h1>DigitalRest</h1>
        <p>Usuario <input REQUIRED type="text" color: red placeholder= "&#128273; Usuario" name="usuario"></p>
        <p>Contraseña <input REQUIRED type="password" placeholder= "&#128274; Contraseña" name="password"></p>
        <br>
        <input type="submit" value="Ingresar">
<br>
<br>

<a href="Registro.php" style="color: white">Crear una cuenta</a>
<br>
<br>
<a href="correo.php" style="color: white">¿Olvidaste tu contraseña?</a>
<br>
<br>
<a href="<?php echo base_url(); ?>/" style="color: white">Regresar</a>
    </form>
</body>
</html>