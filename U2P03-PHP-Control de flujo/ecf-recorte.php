<html>
<body>
<?php
if (! isset($_POST['enviar'])) {
    ?>
<form action="" method="post">
Cadena<input type="text" name="Cadena">
<input type="submit" name="enviar">
</form>
<?php
} else {
    
   $cadena=$_POST['Cadena'];
  
   
   for ($i = strlen($cadena); $i >0 ; $i--) {
       
       for ($j = 0; $j < $i; $j++) {
           echo $cadena[$j];
       }
       echo "</br>";
   } 
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>