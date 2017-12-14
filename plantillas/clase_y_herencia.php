<?php
//define("Color", "rojo");
class Figuras{
    private $color="verde";
    
    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function getColor(){
        return $this->color;
    }
}



class Rectangulo extends Figuras{
    
    public $base, $altura, $perimetro;
    
    function __construct($base, $altura){
        $this->altura=$_POST["altura"];
        $this->base=$_POST["base"];
        
    }
    
    public function calcularArea(){
        return $this->base * $this->altura;
    }
    public function calcularPerimetro(){
        $this->perimetro=($this->base*2)+($this->altura*2);
        return ($this->perimetro);
        
        
    }
    function imprimeForeach(){
        foreach ($this as $clave=>$valor){
            print "$clave => $valor\n";
        }
    }
    function __destruct(){
        print "Rectángulo destruido";
    }
}
?>
