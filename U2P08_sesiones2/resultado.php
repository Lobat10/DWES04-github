<?php
session_name("juego");
session_start();
$mensaje="";

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

if(!isset($_SESSION['resp3'])){
    header("Location: test3.php");
    
}elseif(!isset($_SESSION['nombre'])){
    header("Location: registro.php");
    
}else{
    
    if ($_SESSION['ans1'] && $_SESSION['ans2'] && $_SESSION['ans3'] ){
        $mensaje="Enhorabuena has acertado todas las preguntas!!";
    }elseif ($_SESSION['ans1'] && $_SESSION['ans2']){
        $mensaje="Suerta a la proxima, has acertado dos preguntas, has fallado la tercera";
    }elseif ($_SESSION['ans1'] && $_SESSION['ans3']){
        $mensaje="Suerta a la proxima, has acertado dos preguntas, has fallado la segunda";
    }elseif ($_SESSION['ans3'] && $_SESSION['ans2']){
        $mensaje="Suerta a la proxima, has acertado dos preguntas, has fallado la primera";
    }elseif ($_SESSION['ans1'] ){
        $mensaje="Suerta a la proxima, has acertado una pregunta, has fallado la segunda y la tercera";
    }elseif ($_SESSION['ans2'] ){
        $mensaje="Suerta a la proxima, has acertado una pregunta, has fallado la primera y la tercera";
    }elseif ($_SESSION['ans3'] ){
        $mensaje="Suerte a la proxima, has acertado una pregunta, has fallado la segunda y la primera";
    }else{
        $mensaje="No has acertado ninguna, ponte las pilas!!"; 
    }
}
?>
<html>
<head>
<title>Resultados</title>
<meta charset="UTF-8"/>
</head>
<?php 
if($mensaje!=""){
?>
<body>
<h3><?php echo $mensaje;?></h3>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
</body></html>
<?php 
}

?>