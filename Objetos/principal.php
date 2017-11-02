
<html>
<body>
<?php
include 'figuras.php';
include 'Triangulo.php';
include 'Circulo.php';
echo "<h1> Ques deseas crear??</h1>";

if (! isset($_POST['enviar'])){
?>
    <form action="principal.php" method="post">
    Circulo<input type="radio" name="group" value="2">
    Triangulo<input type="radio" name="group" value="1" checked>
    <input type="submit" name="enviar">
    </form>
<?php 
}else{
    $check=$_POST['group'];
    if($check==1){
    ?>

<form action="principalTriangulo.php" method="post">
Base Triangulo<input type="number" name="bas">
Altura Triangulo<input type="number" name="alt">
<input type="submit" name="enviar">
</form>
<?php
} else if($check==2) {
    ?>
<form action="principalCirculo.php" method="post">
Radio circulo<input type="number" name="rad">
<input type="submit" name="enviar">
</form>
<?php
    }    
}
?>
</body>
</html>