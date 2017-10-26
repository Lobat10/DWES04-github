<html>
<body>
<?php
if (! isset($_POST['enviar'])) {
    ?>
<form action="" method="post">
Bisiesto <input type="radio" name="group" value="1">
No bisiesto <input type="radio" name="group" value="2" checked> 
Mes <input type="text" name="valor">
<input type="submit" name="enviar">
</form>
<?php
} else {
    $mes = $_POST['valor'];
    $bisiesto = $_POST['group'];
    
    if(is_numeric($mes)){
        
        switch ($mes) {
            case 1: case 3: case 5: case 6: case 8: case 10: case 12:
                echo "<p>31 días.</p>" ;
                break;
            case 11: case 4: case 7: case 9:
                echo "<p>30 días.</p>" ;
                break;
            case 2:
                if($bisiesto==1){
                    echo "<p>29 días.</p>" ;
                }else{
                    echo "<p>28 días.</p>" ;
                }
                break;
            default:
                echo "<h1>ERROR 1</h1>";
            break;
        }
    }elseif (is_string($mes)) {
        
        $mes=strtolower($mes);
        
       if(strcmp($mes,"enero")==0){
           echo "<p>31 días.</p>" ;
       }elseif (strcmp($mes,"febrero")==0){
           if($bisiesto==1){
               echo "<p>29 días.</p>" ;
           }else{
               echo "<p>28 días.</p>" ;
           }
       }elseif (strcmp($mes,"marzo")==0){
           echo "<p>31 días.</p>" ;
       }elseif (strcmp($mes,"abril")==0){
           echo "<p>30 días.</p>" ;
       }elseif (strcmp($mes,"mayo")==0){
           echo "<p>31 días.</p>" ;
       }elseif (strcmp($mes,"junio")==0){
           echo "<p>31 días.</p>" ;
       }elseif (strcmp($mes,"julio")==0){
           echo "<p>30 días.</p>" ;
       }elseif (strcmp($mes,"agosto")==0){
           echo "<p>31 días.</p>" ;
       }elseif (strcmp($mes,"septiembre")==0){
           echo "<p>30 días.</p>" ;
       }elseif (strcmp($mes,"octubre")==0){
           echo "<p>31 días.</p>" ;
       }elseif (strcmp($mes,"noviembre")==0){
           echo "<p>30 días.</p>" ;
       }elseif (strcmp($mes,"diciembre")==0){
           echo "<p>31 días.</p>" ;
       }else{
           echo "<h1>ERROR 2</h1>";
       }
    }
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>