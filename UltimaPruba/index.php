<?php
echo "<h1>Funciona</h1>";

$nombre = "Adrián";
echo "Mi nombre es " . $nombre . ".\n";

define("ALUMNO", "Adrián Lobato");
echo "El alumno es " . ALUMNO;

$a = 5;
$b = 10;
echo "</br>";
echo $a += $b . "";
echo "</br>";
echo $a -= $b . "";
echo "</br>";
echo $a *= $b . "";
echo "</br>";
echo $a /= $b . "";
echo "</br>";
echo $a .= $b . "";

echo "</br>";
$c = 5;
$d = 10;
if ($a>$b){
    echo "$c es mayor que $d";
}elseif($a<$b){
    echo "$c es menor que $d";
}else{
    echo "$c es igual que $d";
}

for($i=0; $i<10;$i++){
    echo "</br>";
    echo "$i";
}

$cadena="Esto es una prueba.";

echo "</br>";
echo "<p>El texto:'$cadena' tiene ".strLen($cadena)." caracteres.<p>";
echo "</br>";
echo "Caracter numero 6".$cadena[6];
echo "</br>";
echo "Ultimo caracter ".$cadena[strlen($cadena)-1];

echo "</br>";

echo strtoupper($cadena);
echo "</br>";

echo strpos($cadena, "o");
echo "</br>";

echo str_word_count($cadena);
echo "</br>";

$ciclos= array("One","Two","Night");

for($i=0;$i<sizeof($ciclos);$i++){
echo $ciclos[$i];
echo "</br>";
}

$equipos=array(1=>"Real de Madrid", 2=>"FC. Barcelona", 3=>"Atletico de Madrid");

echo "<h1>Campeón $equipos[1]</h1>";
echo "</br>";


$jugadores[0]="Serresiete";
$jugadores[1]="Kaka";
$jugadores[4]="Casemiro";
$jugadores[5]="Vinlli Price";

for($i=0;$i<=sizeof($jugadores)+1;$i++){
    if(isset($jugadores[$i])){
        echo $jugadores[$i];
        echo "</br>";
    }else {
        echo "Posicion ".$i." esta vacia.";
        echo "</br>";
    }
}
?>