<?php
if (session_status () == PHP_SESSION_NONE){
    session_name("idSesion04");
    session_start ();
   if (isset ( $_SESSION ['contador'] ))
        $_SESSION ['contador'] += 1;
    else
            $_SESSION ['contador'] = 1;
            $mensaje = "Has visitado esta página " . $_SESSION ['contador'] . " veces en esta sesión.";
    }
if(session_status() == PHP_SESSION_NONE) {
    // código de renombrado de la sesión
    session_start();
}
if (isset($_REQUEST["reiniciarContador"])) {
    unset($_SESSION["contador"]);
}
?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h3><?php echo $mensaje;?></h3>
<p><a href="<?php echo $_SERVER['PHP_SELF']?>">Recargar la página</a></p>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?reiniciarContador=true"?>">Reiniciar contador</a></p>
</body></html>