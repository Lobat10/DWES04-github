<?php
class Animal {
    
    public $chip;
    public $nombre;
    public $tipo;
    public $imagen;
    
    public function getChip()
    {
        return $this->chip;
    }
    
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }
    
    
    public function getImagen()
    {
        return $this->imagen;
    }
    
    public function __toString(){
        return "<p>Chip:". $this->getChip()."</p>
                <p>Nombre:". $this->getNombre()."</p>
                <p>Tipo:". $this->getTipo()." </p>
                <p>Imagen:<img src='img/".$this->getImagen()."'></p>";
    }
    
}


?>