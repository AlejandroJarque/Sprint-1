<?php
class Shape {
    public $ancho;
    public $alto;

    public function __construct(int $ancho, int $alto) {
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }
}
?>