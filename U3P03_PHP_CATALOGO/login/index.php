<?php
include "connection.php";
$mensajeError='';
session_start();

$user='';
$admin='';

if(isset($_SESSION['login'])){
    $login=$_SESSION['login'];
}else{
    $login=0;   
}
if(isset($_SESSION['usuario'])){
    $user=$_SESSION['usuario'];
}
if(isset($_SESSION['admin'])){
    $admin=$_SESSION['admin'];
}

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