<?php
$resultado = $conexion -> query("SELECT * from obra,autor WHERE autor.idAutor=obra.Autor");
if($resultado->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";
while ($obra = $resultado->fetch_object()) {
    
    echo "<tr bgcolor='lightgreen'>";
    echo "<td>".$obra->getIdDisco()."</td>\n";
    echo "<td>".$obra->getTitulo()."</td>\n";
    
    echo "<td>".$obra->getNombreAutor()."</td>\n";
    
    echo "<td><img src='".$ruta1.$obra->getImagen()."'></td>\n";
    echo "</tr>";
    //mysqli_free_result($resultado2);
    
    $resultado->free_result();
    
    echo "<td>$obra[Nombre]</td>\n";//---------->while ($obra = $resultado->fetch_assoc())
    
}
        //----------------------------------------------------
$resultado = $conexion -> query("SELECT * from usuario WHERE login='$nombre'");

$conexion->query("INSERT INTO usuario (login, password, nombre, admin)
                            values ('$nombre', '$contraEncript', '$nombreCompleto',0)");

$conexion->query("DELETE FROM usuario WHERE login='$nombre'");






?>