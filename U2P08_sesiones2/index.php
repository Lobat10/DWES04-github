<?php
$nombre="";
session_name("juego");
session_start();

if (!isset($_SESSION['nombre'])){
    header("Location: registro.php");
}else{
    
    $nombre=$_SESSION['nombre'];
}
?>
<html>
<head>
<title>Index</title>
<meta charset="UTF-8"/>
</head>
<body>
<?php
if($nombre!=""){
?>
<h3>Bienvenido <?php echo $nombre;?></h3>
<?php
}
?>
<p><a href="test1.php">">COMENZAR TEST!!</a></p>
</body></html>