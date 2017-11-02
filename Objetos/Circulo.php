<?php


class Circulo extends Figura{
    
    public $radio;
    
    public function getRadio()
    {
        return $this->radio;
    }
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function area()
    {
        return pow((pi())*($this->radio),2);
    }

    public function perimetro()
    {
        return (pi() * $this->radio)/2;
    }

}
?>