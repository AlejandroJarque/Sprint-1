<?php
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this -> name = $name;
    }

    abstract public function Hablar();

    public function getNombre() {
        return $this -> name;
    }
}
?>