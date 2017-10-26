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
    $total=1;
    
    for ($i = $num1; $i > 0; $i--) {
        echo "<p>$i *</p>";
        $total*=$i;
    }
    
    echo "<p>$total</p>";
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>
