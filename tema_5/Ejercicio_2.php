<?php

abstract class Shape2{
    protected $alto;
    protected $ancho;

    public function __construct($ancho, $alto) {
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }

    abstract public function Calculo();
}

class Tri Extends Shape2{
    public function Calculo() {
        $areaT = ($this -> ancho * $this -> alto) / 2;
        return $areaT;
    }
}

class Rect Extends Shape2{
    public function calculo() {
        $areaR = $this -> ancho * $this -> alto;
        return $areaR;
    }
}

$miTriangulo2 = new Tri(20, 10);
$miRectangulo2 = new Rect(40, 15);

echo "El area de mi triangulo es ". $miTriangulo2 -> Calculo()."\n";
echo "El area de mi triangulo es ". $miRectangulo2 -> Calculo();
?>