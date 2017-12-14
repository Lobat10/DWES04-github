<?php
?>
<html>
<head>
	<title>Alta</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<h3>Solicitud de alta</h3>
	<div>
  		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Nombre:<input type="text" name="nombre">
		Contraseña:<input type="text" name="contraseña">
		Nombre Completo:<input type="text" name="nomCompleto">
		<input type="submit" name="enviar">
		</form>
  	</div>
  	<a href='login.php'>Cancelar</a>
</body>
</html>
-----------------------------------
 <html>
    <head>
    <title>Conexión a BBDD Catalogo13</title>
    <meta charset="UTF-8"/>
    </head>
    <body>
    <h2>Base de datos Catalogo13</h2>
   
    <a href='http://localhost/U3P04-PHP-Autenticacion/login/indice.php'>Salir</a>
   		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8"); ?> " method="post">
		Autor a buscar: <input type="text" name="buscaObras">
		<input type="submit" name="enviar">
		</form>
     <a href="mostrarCatalogoFinal.php">Eliminar Filtros</a>
    <table style='border:0'>
    <tr style='background-color:lightblue'>
    <th>IdDisco</th>
    <th>Titulo <a href="mostrarCatalogoFinal.php?op=1"> &#9650 </a><a href="mostrarCatalogoFinal.php?op=2">&#9660</a></th>
    <th>Autor <a href="mostrarCatalogoFinal.php?op=3"> &#9650 </a><a href="mostrarCatalogoFinal.php?op=4">&#9660</a></th>
    <th>Imagen</th>
    </tr>
    
    			------
   echo "<tr bgcolor='lightgreen'>";
   // echo "<td>".$obra->getIdDisco()."</td>\n";
    echo "<td><a href='mostrarObra.php?IdDisco=$obra[IdDisco]'>$obra[IdDisco]</a></td>";
    echo "<td>$obra[Titulo]</td>";
    echo "<td><a href='mostrarCatalogoFinal.php?NomAutor=$obra[Nombre]'>$obra[Nombre]</a></td>";
            //PASANDO LA ID DEL AUTOR
            //echo "<td><a href='mostrarCatalogo.php?NomAutor2=$obra[IdAutor]'>$obra[Nombre] por Id</a></td>";
    echo "<td><img src='$ruta1$obra[imagen]'></td>";
    echo "</tr>";
    
   
}

//mysqli_free_result($resultado); //Liberamos la variable $resultado
?>
</table>  			
    			