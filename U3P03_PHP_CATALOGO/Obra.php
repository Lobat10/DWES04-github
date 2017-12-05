<?php

class Obra {
   
    public $codigoObra;
    public $nombreObra;
    public $duracion;
    public $imagen;
    public $codigoAutor;


    public function getImagen()
    {
        return $this->imagen;
    }

    public function getCodigoObra()
    {
        return $this->codigoObra;
    }


    public function getNombreObra()
    {
        return $this->nombreObra;
    }

  
    public function getDuracion()
    {
        return $this->duracion;
    }

  
    public function getCodigoAutor()
    {
        return $this->codigoAutor;
    }
    public function __toString() {
      
        return "<p>Codigo Obra:". $this->getCodigoObra()."</p>
                <p>Nombre Obra:". $this->getNombreObra()."</p>
                <p>duracion:". $this->getDuracion()." </p>
                <p>Imagen:<img src='img/".$this->getImagen()."'></p>
                <p>codigo Autor:". $this->getCodigoAutor()." </p>";
    }
    
    
}

?>