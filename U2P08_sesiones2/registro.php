<?php

$mensaje="";
if (isset($_SESSION['nombre'])){
    header("Location: index.php");
}else{
    
    if (isset($_POST['enviar'])){
        
        if (!empty($_POST['nombre'])) {
            session_name("juego");
            session_start();
            $_SESSION['nombre']=$_POST['nombre'];
            header("Location: index.php");
            
        }else{
            $mensaje="No puede estar vacio el campo.";
        }
        
    }else{
        ?>
        <html>
<head>
<title>Registro</title>
<meta charset="UTF-8"/>
</head>
<form action="registro.php" method="post">
Introduce tu nombre : <input type="text" name="nombre">
<input type="submit" name="enviar">
</form>
<body>
<h3><?php echo $mensaje;?></h3>
</body></html>
<?php 
    }
}
?>