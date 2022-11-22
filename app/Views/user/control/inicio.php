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
    
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
    <form action="validar.php" method="post">
        <h1><span> &#x1f32f;</span>DigitalRest</h1>
        <a href="<?php echo base_url(); ?>/login" style="color: white">Administrador</a>
        <br>
        <br>
        <a href="<?php echo base_url(); ?>/login2" style="color: white">Empleado</a>
        
<br>
<br>
    </form>
</body>
</html>