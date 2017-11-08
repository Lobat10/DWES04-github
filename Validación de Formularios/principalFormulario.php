<html>
<head>
<title>Adrián Lobato</title>
<style type="text/css">

</style>
</head>
<body>

<div>
<h1>Formulario para validación</h1>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">

	<?php $nombre=$apellido=$email=$pass=$tlf=$direc=$fecha=$errorPass=$errorNom=$errorApel=$errorEmail=$errorTelef=$errorFecha=$errorDirec="";?>
	<br/>
	<p>Nombre:</p> <input name="nombre" type="text" value="">
	<?php 
	
	if(isset($_POST["enviar"])){
		
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST["nombre"])) {
			$errorNom = "<span>* Nombre no válido.<br/> El nombre solo debe de contener letras.</span>";
			$nombre=$_POST['nombre'];
			$validNom=false;
		}
		
		if (empty($_POST["nombre"])){
		    $validNom=false;
		}else $validNom=true;
		
		if($errorNom!=""){
		    echo $errorNom;
			$validNom=false;
		}else if (!$validNom){
			echo "<span>* Atencion, campo obligatorio</span>";
		}else{
		    $validNom=true;
			$nombre=$_POST["nombre"];
			echo "<input class='input' name='nombre' type='text' value='$nombre'>";
		}
			
	}
	
	?>
	<br/>
	<br/>
	<p>Apellido:</p> <input type="text" name="apellido" value="">
	<?php 
	
	if(isset($_POST["enviar"])){
		
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST["apellido"])) {
			$errorApel = "<span>* Apellido no válido.<br/>El apellido solo debe de contener letras.</span>";
			$apellido=$_POST['apellido'];
			$validApel=false;
		}

		if (empty($_POST["apellido"])){
		    $validApel=false;
		}else{
		    $validApel=true;
		}
		
		if($errorApel!=""){
		    echo $errorApel;
		    $validApel=false;
		}
		else{
		
		    if (!$validApel) {
			     echo "<span>* Atencion, campo obligatorio</span>";
		    }else{ 
    		    $validApel=true;
    			$apellido=$_POST["apellido"];
    			echo "<input class='input' name='apellido' type='text' value='$apellido'>";
		  }
			
		}
	}

	?>
	<br/>
	<br/>
	<p>Email:</p> <input type="text" name="email" value="">
	
	<?php 
	
	if(isset($_POST["enviar"])){
		
				
		if (empty($_POST["email"])){
			$validEmail=false;
		}else {
		      if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$errorEmail = "<span>* Formato de email inválido</span>";
				$email=$_POST["email"];
				$validEmail=false;
		}else{
		    $validEmail=true;
		      }
		}
		if($errorEmail!=""){
		    echo $errorEmail;
			$validEmail=false;
		}
		else		
		    if (!$validEmail)
			echo "<span>* Atencion, campo obligatorio</span>";
		else{
		    $validEmail=true;
			$email=$_POST["email"];
			echo "<input class='input' name='email' type='text' value='$email'>";
		}
			
		
	}
	?>
	<br/>
	<br/>
	<p>Password:</p> <input type="password" name="pass" value="">
	<?php 
	$validPass=true;
	
	
	
	if(isset($_POST["enviar"])){
		
		if (empty($_POST["pass"])){
			$validPass=false;
			
		}else {
		    
		    $pass=$_POST['pass'];
		    
		    if(strlen($pass) < 6){
		        $errorPass= "La pass debe tener al menos 6 caracteres";
		        $validPass=false;
		    }
		    if(strlen($pass) > 16){
		        $errorPass="La pass no puede tener más de 16 caracteres";
		        $validPass=false;
		    }
		    if (!preg_match('`[a-z]`',$pass)){
		        $errorPass="La pass debe tener al menos una letra minúscula";
		        $validPass=false;
		    }
		    if (!preg_match('`[A-Z]`',$pass)){
		        $errorPass ="La pass debe tener al menos una letra mayúscula";
		        $validPass=false;
		    }
		    if (!preg_match('`[0-9]`',$pass)){
		        $errorPass = "La pass tener al menos un caracter numérico";
		        $validPass=false;
		    }
	    
		}
		if (!$validPass){
		    echo "<span>* Atencion, campo obligatorio</span>".$errorPass;
		} else{
		    
		    echo "<input class='input' name='pass' type='password' value='$pass'>";
		}
	}
	?>
	<br/>
	<br/>
	<p>Telefono:</p> <input type="tel" name="tlf" value="">
	<?php
	$validTlf=true;
	
	if(isset($_POST["enviar"])){
	    
	    if (empty($_POST["tlf"])){
	        $validTlf=false;
	        
	    }else {
	        
	        $tlf=$_POST['tlf'];
	        
	        if(strlen($tlf) != 9){
	            $errorTelef= " El telefono debe tener 9 numeros";
	            $validTlf=false;
	        }
	        
	        if(!is_numeric($tlf)){
	            $errorTelef=" El telefono debe ser numerico";
	        }
     
	    }
	    if (!$validTlf){
	        echo "<span>* Atencion, campo obligatorio</span>".$errorTelef;
	        
	    } else{
	        
	        echo "<input class='input' name='tlf' type='tel' value='$tlf'>";
	    }
	}
	?>
	<br/>
	<br/>
	<p>Direccion :</p> <input type="text" name="direccion" value="">
	<?php
	$validDirecc=true;
	
	
	if(isset($_POST["enviar"])){
	    
	    if (empty($_POST["direccion"])){
	        $validDirecc=false;
	        
	    }else {
	        
	        $direc=$_POST['direccion'];
     
	    }
	    if (!$validDirecc){
	        echo "<span>* Atencion, campo obligatorio</span>";
	        
	    } else{
	        
	        echo "<input class='input' name='direccion' type='text' value='$direc'>";
	    }
	}
	?>
	<br/>
	<br/>
	<p>Fecha Nacimiento:</p> <input type="date" name="fecha" min="1950-01-01">
	<?php
	$validFecha=true;
	
	
	if(isset($_POST["enviar"])){
	    
	    if (empty($_POST["fecha"])){
	        $validFecha=false;
	        
	    }else {
	        
	        $fecha=$_POST['fecha'];
     
	    }
	    if (!$validFecha){
	        echo "<span>* Atencion, campo obligatorio</span>";
	        
	    } else{
	        
	        echo "<input class='input' name='fecha' type='date' value='$fecha'>";
	    }
	}
	?>
	<br/>
	<br/>
	<p>Modulos:<br>
	<select name="modulo">

	<option selected>Daw</option>

	<option>Asirt</option>

	<option >Smr</option>

	</select>
	</p> 

	<br/>
	<br/>
	<input type="submit" value="Enviar" name="enviar" id="boton">
	<br/>
</form>
</div>

<h1 class="checked">Checked</h1>
<p class="checked">
<?php 
if(isset($_POST["enviar"])){
	
    if ($validNom){	
		echo $nombre;
	}
	else 
	    if($errorNom!=""){
		echo "$nombre <span>Nombre no válido</span>";
	}else
		echo "$nombre <span>Nombre vacio</span>";
	
	echo "<br/>";
	
	if ($validApel){
		echo $apellido;
		
	}else if($errorApel!=""){
	    
		echo "$apellido <span>Apellido no válido</span>";
	}else{ 		
		echo "$apellido <span>Apellido vacio</span>";
	}
	echo "<br/>";
	if ($validEmail){
		echo $email;
		
	}else if($errorEmail!=""){
		echo "$email <span>Email no válido</span>";
		
	}else {
	    echo "$email <span>Email vacio</span>";
	}
	echo "<br/>";
	
	if ($validPass) {
	    echo $pass;
	    
	}else if($errorPass!=""){
	    
	    echo"$pass<span>Password no válido</span>";
	}else{
	    
	    echo "$pass<span>Password vacio</span>";
	}
	echo "<br/>";
	
	if ($validTlf) {
	    echo $tlf;
	    
	}else if($errorTelef!=""){
	    
	    echo"$tlf<span> Telefono no válido</span>";
	}else{
	    
	    echo "$tlf<span> Telefono vacio</span>";
	}
	echo "<br/>";
	
	if ($validDirecc) {
	    echo $direc;
	    
	}else if($errorDirec!=""){
	    
	    echo"$direc<span> Direccion no válido</span>";
	}else{
	    
	    echo "$direc<span> Direccion vacio</span>";
	}
	echo "<br/>";
	
	if ($validFecha) {
	    echo $fecha;
	    
	}else if($errorFecha!=""){
	    
	    echo"$fecha<span> Fecha no válido</span>";
	}else{
	    
	    echo"$fecha<span> Fecha vacio</span>";
	}
	echo "<br/>";
}
?>



</p>
</body>
</html>

