<html>
<body>
<?php
include 'figuras.php';
include 'Triangulo.php';
include 'Circulo.php';

    if (! isset($_POST['enviar'])) {
?>

    <form action="principalCirculo.php" method="post">
    Radio circulo<input type="number" name="rad">
    <input type="submit" name="enviar">
    </form>
<?php
} else {
    $cir=new Circulo();
    $cir->setRadio($_POST['rad']);
    
    echo "<p>Área del circulo: ".$cir->area()." </p></br>";
    echo "<p>Perimetro del circulo: ".$cir->perimetro()." </p></br>";
    
    
        }
     
?>
</body>
</html>