<?php
session_name("juego");
session_start();

if(!isset($_SESSION["resp2"])){
    header("Location: test2.php");
    
}

if(!isset($_SESSION['nombre'])){
    header("Location: registro.php");
    
}
    
    if (isset($_POST['enviar'])){
        
        $_SESSION["resp3"]=$_POST['preg3'];
        
        if($_POST['preg3']=="correcto"){
            
            $_SESSION["ans3"]=true;
        }else{
            $_SESSION["ans3"]=false;
        }
        
        header("Location: resultado.php");
    }else{

?>
<html>
<head>
<title>Test3</title>
<meta charset="UTF-8"/>
</head>
<form action="test3.php" method="post">
<h3>¿Quien dirige "Pulp Fiction"?:</h3> 
<input type="radio" name="preg3" value="correcto" >Quentin Tarantino
<input type="radio" name="preg3" value="incorrecto">Martin Scorsese
<input type="radio" name="preg3" value="incorrecto">Steven Spielberg
<input type="submit" name="enviar">
</form>
<body>
</body></html>

<?php 
    }
?>