<?php
require_once 'ClassShape.php';

class Rectangulo Extends Shape {
    public function CalcularArea() {
        $areaR = $this -> ancho * $this -> alto;
        return $areaR;
    }
}

$miRectangulo = new Rectangulo(20, 5);
echo "El area de mi rectangulo es ". $miRectangulo -> CalcularArea();
?>