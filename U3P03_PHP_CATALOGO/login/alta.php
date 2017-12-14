<?php
include('connectionAdmin.php');
$mensajeError='';
$mensaje='';

$user='';
$pass='';
$nombre='';
$descripcion='';
$tipoCuenta='';

if(isset($_POST['user'])){
    $user=$_POST['user'];
}
if(isset($_POST['pass'])){
    $pass=$_POST['pass'];
}
if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
}
if(isset($_POST['descripcion'])){
    $descripcion=$_POST['descripcion'];
}
if(isset($_POST['tipo'])){
    $tipoCuenta=$_POST['tipo'];
}

if(isset($_POST['enviar'])){
    if($user==''){
        $mensajeError="El nombre de usuario no se ha introducido";
    }else{
        if($pass==''){
            $mensajeError="La contraseña no se ha introducido";
        }else{
            $resultado= $conexion->query('SELECT login FROM usuario WHERE login="'.$user.'"');
            if($resultado->num_rows!=0){
                $mensajeError="El usuario ya existe";
            }else{
                $resultado->free_result();
                $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
                $resultado=$conexion->query( 'INSERT INTO usuario (admin,descripcion,login,nombre,password) VALUES("'.$tipoCuenta .'","'.$descripcion.'","'.$user.'","'.$nombre.'","'.$passwordHash.'")');
                if($conexion->connect_error){
                    $mensajeError="Ha fallado la conexion";
                }else
                $mensaje="Se ha introducido el usuario correctamente";
            }
        }
    }
}
?>
<html>
<head>
    <title>Alta</title>
</head>
<body>
<h1>Alta de usuarios</h1>
<form action="alta.php" method="POST">
    User:<input type="text" name="user"><br>
    Password:<input type="text" name="pass"><br>
    Nombre Completo:<input type="text" name="nombre"><br>
    Descripción:<input type="text" name="descripcion"><br>
    Admin:<br>
    Si<input type="radio" name="tipo" value="1">
    No<input type="radio" name="tipo" value="0">
    <input type="submit" name="enviar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p><br>
<p><?php if($mensaje!='')echo $mensaje;?></p><br>
<p>Haz clic <a href="login.php">aquí </a>para iniciar sesión.</p>

</body>
</html>