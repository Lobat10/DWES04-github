<?php
session_name("juego");
session_start();

if (!isset($_SESSION['nombre'])){
    
    header("Location: registro.php");
    
}   
    if (isset($_POST['enviar'])){
        
        $_SESSION["resp1"]=$_POST['preg1'];
        
        if($_POST['preg1']=="correcto"){
            
            $_SESSION["ans1"]=true;
            
        }else{
            $_SESSION["ans1"]=false;
        }
       
        header("Location: test2.php");
    }else{
        
   

?>
<html>
<head>
<title>Test1</title>
<meta charset="UTF-8"/>
</head>
<form action="test1.php" method="post">
<h3>¿Quien descubrió América?:</h3> 
<input type="radio" name="preg1" value="incorrecto" > Napoleon Bonaparte
<input type="radio" name="preg1" value="correcto">Cristobal Colón
<input type="radio" name="preg1" value="incorrecto">Adrián Lobato
<input type="submit" name="enviar">
</form>
<body>
</body></html>
<?php
}

?>