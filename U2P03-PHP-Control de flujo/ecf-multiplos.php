<html>
<body>
<?php

$mult3=" ";
$mult5=" ";

for ($i = 1; $i <= 1000; $i++) {
    if($i%3==0){
        $mult3.=$i;//.",";
        
    }
    if($i%5==0){
        $mult5.=$i;//.",";
        
    }
     
}

echo "Multiplos de 3, $mult3<br>";
echo "Multiplos de 5, $mult5<br>";

echo "20 primeros multiplos de 3 ". substr($mult3, 0, 19)."</br>";
echo "20 primeros multiplos de 5 ".substr($mult5, 0, 19);


?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>