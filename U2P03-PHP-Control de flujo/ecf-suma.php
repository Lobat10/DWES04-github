<html>
<body>
<?php
if (! isset($_POST['enviar'])) {
    ?>
<form action="" method="post">
Numero1<input type="number" name="Numero1">
<input type="submit" name="enviar">
</form>
<?php
} else {
    $num1 = $_POST['Numero1'];
    $suma=0;
    
    for ($i = 1; $i <= $num1; $i++) {
        $suma+=$i; 
        echo "<p>$i +</p>";
    }
    
    echo "<p>$suma</p>";
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>