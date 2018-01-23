<!DOCTYPE html>
<html><head><meta charset='UTF-8'/></head>
<body>
<?php
$rutaArchivo = "files/temporal.txt";
// Pruebas
unlink("files/temporal.txt");
/*
$archivo = fopen($rutaArchivo, "w") or die("Imposible  abrir el archivo para escritura");


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


$array= file($rutaArchivo);
sort($array);
$archivo = fopen($rutaArchivo, "w") or die("Imposible  abrir el archivo para escritura");

$cont=0;
$posiciones=count($array);
print_r($array);
while (count($array)<=$cont){
    fwrite($archivo,$array[$cont]);
    $cont+=1;
}

$archivo = fopen($rutaArchivo, "r") or die("Imposible  abrir el archivo para escritura");
while(!feof($archivo)) {
    
    $c= fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
    else echo $c;
}

fclose($archivo);
*/
/*
$archivo2 = fopen("files/nuevo.txt", "w") or die("Imposible  abrir el archivo para escritura");;

fwrite($archivo2,"Adrián\n");
fwrite($archivo2,"Lobato\n");

readfile("files/nuevo.txt");


fclose($archivo2);
*/
?>
</body></html>