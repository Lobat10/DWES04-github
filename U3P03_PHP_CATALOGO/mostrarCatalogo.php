<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de catalogo</h2>
<?php

$login=$_SESSION['login'];
if($login!=1) header('Location:./login/login.php');

$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
include "Obra.php";
session_name('autor');
session_start();

$conexion = new mysqli($servidor,$usuario,$clave,"catalogo");
$conexion->query("SET NAMES 'UTF8'");

if (isset($_GET["cerrarSesion"])) {
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
    }
    session_destroy();
}

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

if(isset($_GET['order']) && $_GET['order']==1){
    $order=" ORDER BY codigoObra ASC";
}else{
    $order=" ORDER BY codigoObra DESC";
}
if (isset($_GET['codigoAutor'])){
    $where=" WHERE codigoAutor=".$_GET['codigoAutor'];
    $_SESSION['cod']=$_GET['codigoAutor'];
}else{
    $where="";
}
?>
<form action="mostrarCatalogo.php" method="post">
<h3>Introduce el nombre de la obra:</h3> 
<input type="text" name="vobra">
<input type="submit" name="enviar">
</form>

<table style='border:0'>
<tr style='background-color:red'>
<?php if(isset($_SESSION['cod'])){
		$varSesion=$_SESSION['cod'];
	?>
	<th>Codigo obra<a href='mostrarCatalogo.php?order=1&codigoAutor=<?php echo $varSesion ?>'>&#9650;</a><a href='mostrarCatalogo.php?order=2&codigoAutor=<?php echo $varSesion ?>'> &#9660;</a></th>
	<?php }else{?>
	<th>Codigo obra<a href='mostrarCatalogo.php?order=1'>&#9650;</a><a href='mostrarCatalogo.php?order=2'> &#9660;</a></th>
	<?php }?>
	<th>Nombre obra</th>
	<th>Duracion</th>
	<th>Imagen obra</th>
	<th>Codigo autor</th>
	<th>Imagen autor</th>
</tr>
<?php

if (isset($_POST['vobra'])) {
    if (!empty($_POST['vobra'])){
        $palabra=explode(" ",$_POST['vobra']);
        $cont=0;
        $where =" WHERE ";
        while((sizeof($palabra))>$cont){
            
            if ((sizeof($palabra)-1)==$cont){
                $where=$where."nombreObra LIKE '%".$palabra[$cont]."%'";
            }else{
                $where=$where."nombreObra LIKE '%".$palabra[$cont]."%' OR ";
            }
            $cont+=1;
        }
        
    }else{
        echo "<p>No puede estar vacio el campo </p>";
    }
}else{

}

/*
 * 
 * AUTOR BUSQUEDA SIN ACABAR
 * 
$where2="";
if (isset($_POST['vautor'])) {
    if (!empty($_POST['vautor'])){
        $palabra=explode(" ",$_POST['vautor']);
        $cont=0;
        $encontrado=false;
        while(!$encontrado && sizeof($palabra)>$cont){
            $where2=" && nombreAutor LIKE '%".$palabra[$cont]."%'";
            $resultado2 = $conexion -> query("SELECT nombreAutor,foto FROM autor where codigoAutor=".$obra->getCodigoAutor()."".$where2);
            if ($resultado->num_rows!=0){
                $encontrado=true;
            }else{
                $cont+=1;
                
            }
        }
    }else{
        echo "<p>No puede estar vacio el campo </p>";
        $where2="";
    }
}else{
    $where2="";    
}
*/

$resultado = $conexion -> query("SELECT * FROM obra".$where."".$order);


if($resultado->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";

while ($obra = $resultado->fetch_object('Obra')) {
    
    $resultado2 = $conexion -> query("SELECT nombreAutor,foto FROM autor where codigoAutor=".$obra->getCodigoAutor());
    $autor=$resultado2-> fetch_assoc();
    
    echo "<tr bgcolor='yellow'>";
    echo "<td>".$obra->getCodigoObra()."</td>\n";
    echo "<td><a href='mostrarObra.php?codigoObra=".$obra->getCodigoObra()."'>".$obra->getNombreObra()."</td>\n";
    echo "<td>".$obra->getDuracion()."</td>\n";
    echo "<td><img src='img/".$obra->getImagen()."'></td>\n";
    echo "<td><a href='mostrarCatalogo.php?codigoAutor=".$obra->getCodigoAutor()."'>".$autor['nombreAutor']."</td>\n";
    echo "<td><img src='img/".$autor['foto']."'></td>\n";
    echo "</tr>";
    
    mysqli_free_result($resultado2);
}
?>
</table>
<?php 

echo "<li><a href='mostrarCatalogo.php?cerrarSesion=true'>Eliminar filtros</a></li>\n";

echo "<h3>Desconectado</h3>";
mysqli_close($conexion);
?>
</body>
</html>