<html>
<body>
<?php
include 'figuras.php';
include 'Triangulo.php';
include 'Circulo.php';


    if (! isset($_POST['enviar'])) {
        ?>
    <form action="principalTriangulo.php" method="post">
    Base Triangulo<input type="number" name="bas">
    Altura Triangulo<input type="number" name="alt">
    <input type="submit" name="enviar">
    </form>
<?php

        } else {
        $tri=new Triangulo();
        $tri->setBase($_POST['bas']);
        $tri->setAltura($_POST['alt']);
        
        echo "<p>Área del triangulo: ".$tri->area()." </p></br>";
        echo "<p>Perimetro del triangulo: ".$tri->perimetro()." </p></br>";
        
        }
    
?>
</body>
</html>
