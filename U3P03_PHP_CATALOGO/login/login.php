<?php
include('connection.php');
session_start();
$user=(isset($_POST['user']) ?  $_POST['user']:'');
$pass=(isset($_POST['pass']) ?  $_POST['pass']:'');
$login=(isset($_SESSION['login']) ? $_SESSION['login']:0);
if($login==1) header('Location:index.php');
$mensajeError='';
if(isset($_POST['enviar'])){

    $resultado = $conexion->query('SELECT login,password FROM usuario WHERE login="'.$user.'"');
    if($resultado->num_rows!=0) {
        while ($usuario = $resultado->fetch_assoc()) {
            if (password_verify($pass, $usuario['password'])) {
                $_SESSION['usuario'] = $user;
                $_SESSION['password'] = $pass;
                $_SESSION['login'] = 1;
                header('Location:index.php');
            }else{
                $mensajeError = "La contraseña es erronea, intentelo de nuevo";
            }
        }
    }else {
        $mensajeError = "El usuario y contraseña son erroneos, intentelo de nuevo";
    }
}
?>

<html>
<head>
    <title>Login</title>
    

</head>
<body>
<div class="container">
<form class="form-signin"action="login.php" method="POST">
    <h1 class="form-signin-heading">Login</h1>
    <label class="sr-only">User:</label><input class="form-control" id="inputEmail" type="text" name="user">
    <label class="sr-only">Password:</label><input class="form-control" id="inputPassword" type="password" name="pass">
    <input class="btn btn-lg btn-primary btn-block"type="submit" name="enviar" value="Entrar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p>
</div>
</body>
</html>