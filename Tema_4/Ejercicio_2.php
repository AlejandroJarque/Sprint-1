<?php
class Shape {
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto) {
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }
}

class Triangulo Extends Shape {
    public function AreaTriangulo() {
        $areaT = ($this -> ancho * $this -> alto) / 2;
        return $areaT;
    }
}

class Rectangulo Extends Shape {
    public function AreaRectangulo() {
        $areaR = $this -> ancho * $this -> alto;
        return $areaR;
    }
}

$miTriangulo = new Triangulo(10, 5);
$miRectangulo = new Rectangulo(20, 5);

echo "El area de mi triangulo es ". $miTriangulo -> AreaTriangulo()."\n";
echo "El area de mi triangulo es ". $miRectangulo -> AreaRectangulo();
?>