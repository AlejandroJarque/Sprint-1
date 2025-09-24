<?php

abstract class Shape2 {
    abstract public function Calculo();
}

class Circulo extends Shape2 {
    public $pi;
    public $r;

    public function __construct($pi, $r){
        $this -> pi = $pi;
        $this -> r = $r;
    }

    public function Calculo(){
        $AreaCirculo = $this -> pi * ($this -> r ** 2);
        return$AreaCirculo;
    }
}

$miCirculo = new Circulo(3.14, 5);
echo "El area de mi circulo es: ". $miCirculo -> Calculo();
?>