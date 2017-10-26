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
    $num1 = $_POST['Numero1'];
    $num2 = $_POST['Numero2'];
    $cont=1;
    $total=1;
    
    while ($cont<=$num2) {
        $total*=$num1;
        $cont++;
    }
    
    echo "<p>$total</p>";
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>