<?php
abstract class Shape2{
    protected $alto;
    protected $ancho;

    public function __construct($ancho, $alto) {
        $this -> ancho = $ancho;
        $this -> alto = $alto;
    }

    abstract public function calcular();
}
?>