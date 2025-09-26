<?php
require_once 'ClassShape2.php';

class Tri extends Shape2{
    public function calcular() {
        $areaT = ($this -> ancho * $this -> alto) / 2;
        return $areaT;
    }
}

$miTriangulo2 = new Tri(20, 10);
echo "El area de mi triangulo es ". $miTriangulo2 -> calcular();
?>