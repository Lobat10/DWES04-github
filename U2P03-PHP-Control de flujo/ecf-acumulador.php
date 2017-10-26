<html>
<body>
<?php

$suma=0;
$num=0;
$hid;
if (isset($_POST['enviar'])){

    $suma=$_POST['ocult'];
    $num=$_POST['numeros'];
    
    $suma+=$num;
    
    
    
    if ($suma>50) {
        echo "<p>La suma de los numeros introducidos es $suma</p>";
    }else{
        ?>
        <form action="" method="post">
        Numero<input type="text" name="numeros">
        <input type="hidden" name="ocult" value=<?php echo $suma ?>>
        <input type="submit" name="enviar">
        </form>
        <?php  
        echo "<p>Aún no has llegado: $suma</p>";
        
    }       
}else{
    ?>
        <form action="" method="post">
        Numero<input type="text" name="numeros">
        <input type="hidden" name="ocult" value=<?php echo $suma ?>>
        <input type="submit" name="enviar">
        </form>
        <?php  
        echo "<p>Aún no has llegado: $suma</p>";
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>