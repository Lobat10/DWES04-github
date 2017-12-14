<?php
include('connectionAdmin.php');
$mensajeError='';

$pass='';
if(isset($_POST['pass'])){
    $pass=$_POST['pass'];
}

session_start();
$user=$_SESSION['usuario'];

if(isset($_POST['enviar'])){
    if($pass==''){
        $mensajeError="Debe introducir la contraseña";
    }else{
        $resultado = $conexion->query('SELECT login, password FROM usuario WHERE login="'.$user.'"');
        if($resultado->num_rows==0){
            $mensajeError="El usuario y la contraseña no coinciden";
        }else {
            while ($usuario = $resultado->fetch_assoc()) {
                if(password_verify($pass,$usuario['password'])){
                    $resultado->free_result();
                    $resultado = $conexion->query('DELETE FROM usuario WHERE login="' . $user . '"');
                    if ($conexion->connect_error) {
                        $mensajeError = "Ha surgido un problema con la base de datos";
                    } else {
                        $mensaje = "El usuario ha sido borrado con exito";
                        header('Location:logout.php');
                    }
                }
            }
        }
    }
}
?>

<html>
<head>
    <title>Baja</title>
</head>
<body>
<h1>Eliminar cuenta de <?= $user; ?></h1>
<form action="baja.php" method="POST">
    Password:<input type="text" name="pass"><br>
    <input type="submit" name="enviar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p><br>
<p>Haz clic <a href="index.php">aquí </a>para volver.</p>

</body>
</html>