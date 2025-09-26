<?php
require_once 'ClassShape2.php';

class Rect Extends Shape2{
    public function calcular() {
        $areaR = $this -> ancho * $this -> alto;
        return $areaR;
    }
}

$miRectangulo2 = new Rect(40, 15);
echo "El area de mi rectangulo es ". $miRectangulo2 -> calcular();
?>