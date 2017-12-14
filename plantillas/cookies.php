<?php

//CREAR COOKIE
if(isset($_POST["enviar"])) {
    //--------"nombre_cookie"-"valor"-----------------"1dia*15"----"disponible para las aplicaciones de:"
    setcookie("visitante", $_POST["nombre"], time() + (86400 * 15), "/U2P06-PHP-Cookies/cookies/"); // 86400 = segundos en 1 día
    header("Location: ".$_SERVER['PHP_SELF']);//Recarga la pagina
}                                                                    //   "/" Disponible para todas las aplicaciones


//ELIMINAR COOKIE
if(isset($_REQUEST["eliminarCookie"])){
    setcookie("visitante",null, time() -1, "/");
}

//COMPROBAR SI ESTA HABILITADO EL NAVEGADOR PARA COOKIES
setcookie("test", "test", time() + 3600, '/');
if(count($_COOKIE) ==0) echo "<h3>Advertencia: tu navegador tiene las cookies deshabilitadas. Esta aplicación no funcionará</h3>";

if(isset($_COOKIE["visitante"])) {//-->$_COOKIE["NOMBRE CON QUE LA CREAMOS"]
    echo "<h2>Damos la bienvenida a $_COOKIE[visitante]</h2>";
}

?>