<html>

<body>
<?php
if (! isset($_POST['enviar'])) {
    ?>

<form action="" method="post">
Numero1<input type="number" name="Numero1">
Numero2<input type="number" name="Numero2">
<input type="submit" name="enviar">
</form>
<?php
} else {
    $num1while = $_POST['Numero1'];
    $num2while = $_POST['Numero2'];
    $num1for = $_POST['Numero1'];
    $num2for = $_POST['Numero2'];
    $asteriscos=" ";
    $almohadillas=" ";
    
    if(($num1while>0 && $num1while<=10) && ($num2while>0 && $num2while<=10)){
        
        if($num1while<$num2while){
           
         while ($num1while < $num2while) {
            
            $asteriscos.="*";
            $num1while++;
          }
             echo "<p>$asteriscos</p>";
             
        }else {
            while ($num2while < $num1while) {
                
                $asteriscos.="*";
                $num2while++;       
            }
            echo "<p>$asteriscos</p>";
        }
        
        if($num1for<$num2for){
            for ($i=$num1for;$i<$num2for;$i++){
                $almohadillas.="#";            
            }
            echo "<p>$almohadillas</p>";
        }else{
            for ($i=$num2for;$i<$num1for;$i++){
                $almohadillas.="#";
            }
            echo "<p>$almohadillas</p>";
            
        }
    }else{
        alert("Los numeros son mallores de 10 o menores que 1");
    }
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>