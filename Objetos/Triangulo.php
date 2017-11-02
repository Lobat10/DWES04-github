<?php
class Triangulo extends Figura
{
    public $base;
    public $altura;
      
    public function getBase()
    {
        return $this->base;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setBase($base)
    {
        $this->base = $base;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }  
    public function __toString() {
       return "Triangulo con base".$this->base." y altura ".$this->altura."." ;
    }
    public function area()
    {
        return ($this->altura)*($this->base)/2;
    }

    public function perimetro()
    {
        return $this->base*3;
    }
    
}

?>