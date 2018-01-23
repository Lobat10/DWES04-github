<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8' />
</head>
<body>
<?php
$rutaArchivo = "files/nombres.txt";
?>
<form action="gestor.php" method="post">
		<h3>Introduce un nombre:</h3>
		<input type="text" name="vnombre"> Borrar: <input type="radio"
			name="accion" value=0> Añadir: <input type="radio" name="accion"
			value=1 checked> <input type="submit" name="enviar">
	</form>
<?php
$array = file($rutaArchivo);
sort($array);

if (isset($_POST['vnombre'])) {
    if ($_POST['vnombre'] != "") {
        
        $name = $_POST['vnombre']."\n";
        
        if ($_POST['accion'] == 1) {
            $cont2 = 0;
            $encontrado = false;
            
            if (in_array($name, $array)) {
                $encontrado = true;
                echo "EL nombre a introducir ya existe.";
            }
            if (! $encontrado) {
                $archivo = fopen($rutaArchivo, "a") or die("Imposible  abrir el archivo para escritura");
                fwrite($archivo, $name);
                echo "Se ha añadido a $name </br>";
                fclose($archivo);
            }
        } else {
            $cont2 = 0;
            $encontrado = false;
            
            if (in_array($name, $array)) {
                $encontrado = true;
            }
            
            if ($encontrado) {
                $cont2 = 0;
                
                
                fclose($archivo);
            }
        }
    } else {
        echo "El campo nombre está vacio</br>";
    }
}
$archivo = fopen($rutaArchivo, "a") or die("Imposible  abrir el archivo para escritura");

if (count($array) == 0) {
    echo "El archivo está vacio.";
} else {
    $cont = 0;
    while (count($array) < $cont) {
        fwrite($archivo, $array[$cont]);
        $cont += 1;
    }
}

fclose($archivo);

$archivo = fopen($rutaArchivo, "r") or die("Imposible  abrir el archivo para escritura");

while (! feof($archivo)) {
    $c = fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n"))
        echo "<br/>";
    else
        echo $c;
}
fclose($archivo);

unlink($archivo);
$archivo = fopen($rutaArchivo, "w") or die("Imposible  abrir el archivo para escritura");
$cont2=0;
while (count($array) > $cont2) {
    fwrite($archivo, $array[$cont2]);
    $cont2 += 1;
}

?>
</body>
</html>