<?php
include('connection.php');
session_start();

$user='';
$pass='';
$login=0;

if(isset($_POST['user'])){
    $user=$_POST['user'];
}
if(isset($_POST['pass'])){
    $pass=$_POST['pass'];  
}
if(isset($_SESSION['login'])){
    $login=$_SESSION['login'];
}

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
<div >
<form action="login.php" method="POST">
    <h1>Login</h1>
    <p>User:</p><input type="text" name="user">
    <p>Password:</p><input type="password" name="pass">
    <input type="submit" name="enviar" value="Entrar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p>
</div>
</body>
</html>