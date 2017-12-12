<?php
include "connection.php";
$mensajeError='';
session_start();
$login=(isset($_SESSION['login']) ? $_SESSION['login']:'');
$user=(isset($_SESSION['usuario']) ? $_SESSION['usuario']:'');
$admin=(isset($_SESSION['admin']) ? $_SESSION['admin']:'');
if($login!=1) header('Location:login.php');
$resultado= $conexion->query('SELECT * from usuario WHERE login="'.$user.'"');
if($resultado->num_rows==0) header('Location:logout.php');
?>


<html>
<head>
    <title>Inicio</title>
</head>
<body>


<?php  while ($usuario = $resultado->fetch_assoc()) {
       echo "<h1>Bienvenido ".  $usuario['nombre']." </h1>";
       echo "<p>Descripcion ". $usuario['descripcion']."</p>";
       echo "<p>Login:".$usuario['login']."</p>";
       $admin=$usuario['admin']; $_SESSION['admin']=$usuario['admin'];
}
?>
<a href="../mostrarCatalogo.php">Catalogo: registros.</a><br>
<a href="logout.php">Cerrar Sesion</a><br>
<a href="baja.php">Eliminar cuenta</a><br>
<?php if($admin==1)echo '<a href="alta.php">Alta de cuenta</a>'; ?>

</body>
</html>