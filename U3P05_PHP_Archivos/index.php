<!DOCTYPE html>
<html><head><meta charset='UTF-8'/></head>
<body>
<?php
$rutaArchivo = "files/modulos.txt";
// Pruebas
/*
readfile("files/modulos.txt");

$lineasArchivo = file($rutaArchivo);

echo "\n";

print_r($lineasArchivo);

echo "\n";

$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
echo fread($archivo,filesize($rutaArchivo)) ."<br/>";
fclose($archivo);

$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
while(!feof($archivo)) {
    echo fgets($archivo) . "<br/>";
}
fclose($archivo);


$archivo = fopen($rutaArchivo, "a") or die("Imposible  abrir el archivo para escritura");
fwrite($archivo,"Programación\n");
fwrite($archivo,"Entornos de desarrollo\n");
*/
$archivo = fopen($rutaArchivo, "r") or die("Imposible  abrir el archivo para escritura");
while(!feof($archivo)) {
    $c = fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
    else echo $c;
}

fclose($archivo);
?>
</body></html>