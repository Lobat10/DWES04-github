<html>
<style >


</style>
<body>
<?php
if (! isset($_POST['enviar'])) {
    ?>
<form action="" method="post">
Numero<input type="text" name="numero">
<input type="submit" name="enviar">
</form>
<?php
} else {
    $num = $_POST['numero'];
    ?><table border="1"> <?php
    for ($i = 1; $i <= $num; $i++) {
       
        ?><tr> <?php
         
        for ($j = 1; $j <= $num; $j++) {
            if($i%2==0){
                ?>
            <td style="padding:3px; background-color:lightblue;"><?php echo $i*$j; ?></td>
            <?php 
            }else{
                ?>
            <td style="padding:3px;"><?php echo $i*$j; ?></td>
            <?php
            }
           
        }
        ?></tr> <?php
    }
    ?></table><?php
}
?>
</body>
<a href="index.php"><input  type="button" name="volver" value="Volver"></a>
</html>