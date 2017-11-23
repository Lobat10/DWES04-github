<?php
session_name("juego");
session_start();


if (!isset($_SESSION["resp1"])){
    header("Location: test1.php");
    
}

if(!isset($_SESSION['nombre'])){
    header("Location: registro.php");
    
}

   
    if (isset($_POST['enviar'])){
        
        $_SESSION["resp2"]=$_POST['preg2'];
        
        if($_POST['preg2']=="correcto"){
            
            $_SESSION["ans2"]=true;
        }else{
            $_SESSION["ans2"]=false;
        }
        
        header("Location: test3.php");
    }else{

?>
<html>
<head>
<title>Test2</title>
<meta charset="UTF-8"/>
</head>
<form action="test2.php" method="post">
<h3>¿Quien canta "Por la raja de tu falda"?:</h3> 
<input type="radio" name="preg2" value="incorrecto">Cafe Quijano
<input type="radio" name="preg2" value="incorrecto">El fari
<input type="radio" name="preg2" value="correcto">Estopa
<input type="submit" name="enviar">
</form>
<body>
</body></html>

<?php 
    }

?>