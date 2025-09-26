<?php
require_once 'ClassShape.php';

class Triangulo Extends Shape {
    public function CalcularArea() {
        $areaT = ($this -> ancho * $this -> alto) / 2;
        return $areaT;
    }
}

$miTriangulo = new Triangulo(10, 5);
echo "El area de mi triangulo es ". $miTriangulo -> CalcularArea()."\n";
?>