<?php
if (session_status () == PHP_SESSION_NONE){
    session_start ();
    $mensaje="";
}
if (isset($_REQUEST["cerrarSesion"])) {
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
    }
    session_destroy();
}

if(isset($_POST['enviar'])){
 
    if (empty($_POST['nombre'])){
        
        $mensaje="El campo no puede estar vacio.";
        
    }else{
        session_name($_POST['nombre']);
       
    }
}
?>
<html>
<head>
<title>Bienvenida</title>
<meta charset="UTF-8"/>
</head>
<?php 

    if(!empty($_POST['nombre'])){
    
        $mensaje="Bienvenido ".$_POST['nombre'];
        
    }else{
        $mensaje="El campo no puede estar vacio.";
        
?>
<form action="saludo.php" method="post">
Introduce tu nombre : <input type="text" name="nombre">
<input type="submit" name="enviar">
</form>
<?php
}

if($mensaje!=""){
?>
<body>
<h3><?php echo $mensaje;?></h3>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
</body></html>
<?php 
}

?>