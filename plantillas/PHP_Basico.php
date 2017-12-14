<html>
<body>

<?php

echo"<h3>Comentarios de los tres tipos</h3>";
//Comentarios de los tres tipos

    //Comentario 1
    #Comentario 2
    /*Comentario
     * 3
     de varias lineas*/

echo"<h3>Sentencias echo con los dos tipos de comillas</h3>";
//Sentencias echo con los dos tipos de comillas
    
    echo "Sentencia  con comillas dobles";
    echo "<br/>";
    echo 'Sentencia echo con comillas simples';
    echo "<br/>";
    $v="var01";
    echo "Sentencia echo con comillas dobles y la variable $v";
    echo "<br/>";
    echo 'Sentencia echo con comillas simples y la variable '.$v;
    echo "<br/>";
  
echo"<h3>Uso de al menos tres operadores de comparación y dos operadores lógicos</h3>";
//Uso de al menos tres operadores de comparación y dos operadores lógicos

    $a=5;
    $b=8;
    echo "Operadores de comparacion";
    echo "<br/>";
    
    if($a>$b){
        echo "$a es mayor que $b";
        echo "<br/>";
    }elseif ($a==$b){
        echo "$a es igual a $b";
        echo "<br/>";
    }else{
        echo "$a es menor que $b";
        echo "<br/>";
    }
    if($a!=$b){
        echo "$a y $b son distintos";
        echo "<br/>";
    
    }
    
    echo "Operadores logicos";
    echo "<br/>";
    
    if($a=5 && $b=8){
        echo "a vale $a y b vale $b";
        echo "<br/>";
    }
    if($a=2 || $b=8){
        echo "Una de las dos se corresponde";
        echo "<br/>";
    }
    
    
    echo"<h3>Uso de un operador de asignación</h3>";
    //Uso de un operador de asignación
    $a=2;
    $b=$a;
    echo"a vale $a y b vale $b";
    echo "<br/>";
    
    echo"<h3>Declaración y uso de una variable por referencia</h3>";
    //Declaración y uso de una variable por referencia
    
    $ciudad="Madrid";
    echo "Mi ciudad es $ciudad";
    echo "<br/>";
    
    
echo"<h3>Declaración y uso de dos constantes, una que obligue a respetar las mayúsculas 
en su uso y otra que no lo haga</h3>";
    /*Declaración y uso de dos constantes, una que obligue a respetar 
     * 
     las mayúsculas en su uso y otra que no lo haga*/
    
    define("NOMBRE", "Francisco");
    echo "Mi nombre es ".NOMBRE;
    echo "<br/>";
    echo "Mi nombre es ".nombre;
    echo "<br/>";
    define("APELLIDO", "Hurtado", true);
    echo "Mi apellido es ".apellido;
    echo "<br/>";

    

echo"<h3>Declaración y uso de un variable booleana y otra de tipo double</h3>";
//Declaración y uso de un variable booleana y otra de tipo double

    $sw=true;
    if($w=true){
        echo "OK";
        echo "<br/>";
    }
    $double=4.25;
    $resultado=$double/2;
    echo "$resultado";
    echo "<br/>";
    
    
    
echo"<h3>Uso de is_numeric, is_bool y is_double con estas variables</h3>";
//Uso de is_numeric, is_bool y is_double con estas variables

    if(is_numeric($double)){
        echo "La variable double es numerica";
        echo "<br/>";
    }
    if(is_double($double)){
        echo "La variable double es double";
        echo "<br/>";
    }
    if(is_bool($sw)){
        echo "La variable sw es boolean";
        echo "<br/>";
    }


echo"<h3>Declaración de una variable de tipo string. Pruebas con la función strlen y con tres de las 
funciones indicadas en el enlace.</h3>";
//Declaración de una variable de tipo string. Pruebas con la función strlen y con tres de las 
//funciones indicadas en el enlace.

    $cadena="Cabeza";
        echo "La cadena '$cadena' tiene ".strlen($cadena)." caracteres";
        echo "<br/>";
        echo str_shuffle($cadena);
        echo "<br/>";
        echo str_replace("a", "O", $cadena);
        echo "<br/>";
        echo str_repeat($cadena,5);
        echo "<br/>";
        
        
echo"<h3>Declaración de un array escalar y uno asociativo</h3>";
//Declaración de un array escalar y uno asociativo
    
    $arEscalar=array("coche", "moto", "bici");//escalar
    $arAsociativo=array("España"=>"Madrid", "Francia"=>"Paris", "Inglaterra"=>"Londres");


    
echo"<h3>Ordenación y volcado de información con var_dump siguiendo 
dos criterios de ordenación en cada uno de los arrays</h3>";
//Ordenación y volcado de información con var_dump siguiendo 
//dos criterios de ordenación en cada uno de los arrays

    var_dump($arEscalar);
    sort($arEscalar);
    arsort($arAsociativo);
    
    echo "<ul>";
    foreach ($arEscalar as $indice){
        echo "<li>$indice</li>\n";
    }
    echo "</ul>";
    
    echo "<ul>";
    foreach ($arAsociativo as $indice){
        echo "<li>$indice</li>\n";
    }
    echo "</ul>";
    
    
echo"<h3>Una estructura de control de cada tipo
 (if-elsif-else, switch, while, do-while, for)</h3>";
//Una estructura de control de cada tipo 
//(if-elsif-else, switch, while, do-while, for)

    $a=5;
    $b=8;
    echo "if-elseif-else:";
    echo "<br/>";
    if($a>$b){
        echo "$a es mayor que $b";
        echo "<br/>";
    }elseif ($a==$b){
        echo "$a es igual a $b";
        echo "<br/>";
    }else{
        echo "$a es menor que $b";
        echo "<br/>";
    }
    if($a!=$b){
        echo "$a y $b son distintos";
        echo "<br/>";
        
    }

    echo "switch";
    echo "<br/>";
    $i=1;
    switch ($i) {
        case 0:
            echo "i es igual a 0";
            echo "<br/>";
            break;
        case 1:
            echo "i es igual a 1";
            echo "<br/>";
            break;
        case 2:
            echo "i es igual a 2";
            echo "<br/>";
            break;
    }
    
    echo "while";
    echo "<br/>";
    while ($a!=8){
        echo "a vale $a, la incrementamos";
        echo "<br/>";
        $a+=1;
    }
    
    echo "do-while";
    echo "<br/>";
    do {
        echo $a;
        echo "<br/>";
        $a+=2;        
    }while($a<40);
    
    echo"for";
    echo "<br/>";
    for($i=0;$i<10;$i++){
        echo $i;
        echo "<br/>";
    }
    
    
    
    
echo"<h3>Un recorrido por cada uno de los dos arrays utilizando foreach,
 generando por ejemplo una lista ordenada con sus elementos</h3>";
//Un recorrido por cada uno de los dos arrays utilizando foreach, 
//generando por ejemplo una lista ordenada con sus elementos
    
    $arEscalar=array("coche", "moto", "bici");
    echo "<ol>";
    foreach ($arEscalar as $indice){
        echo "<li>$indice</li>\n";
    }
    echo "</ol>";
    
    
echo"<h3>Dos pruebas con la variable superglobal _SERVER</h3>";
//Dos pruebas con la variable superglobal _SERVER

    echo $_SERVER['PHP_SELF'];
    echo "<br/>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br/>";

    
echo"<h3>Dos pruebas de funciones: una devolverá algun tipo, la otra no</h3>";
//Dos pruebas de funciones: una devolverá algun tipo, la otra no



    function resta($r1, $r2){
        $res=$r1 - $r2;
        return $res;
    }
    echo "La resta es igual a ".resta(8,3);
    echo "<br/>";

    function suma($s1, $s2){
        $sum = $s1+$s2;
        echo "La suma es $sum";
    }
    suma(2,3);
 echo"<h3>Impresion de la fecha y hora con todo el detalle posible</h3>";
 //Impresion de la fecha y hora con todo el detalle posible
    $fech=date('h-i-s, j-m-y, it is w day');
    echo"<h3>La fecha es $fech</h3>";
    echo "<br/>";
 
 echo"<h3>Una función que utilice una variable global</h3>";
    //Una función que utilice una variable global
    
    $aumento=0.1;
    function sueldo($base){
        global $aumento;
        $nomina=$base+$base*$aumento;
        return $nomina;
    }
    echo"<p>El total a cobrar es ".sueldo(1000)."</p>";
    echo "<br/>";
 
 echo"<h3>Un formulario que reciba tu nombre y lo muestre por pantalla</h3>";
 //Un formulario que reciba tu nombre y lo muestre por pantalla
 if(!isset($_POST['enviar'])){
 ?>
    <form action="fundamentos.php" method="post">
    Nombre: <input type="text" name="nombre">
    <input type ="submit"name="enviar">
    </form>
 <?php 
 }
 else {
     echo "<h3>El nombre es ".$_POST["nombre"]."</h3>";
 }
 
 echo "<br/>";
?>


</body>
</html>
