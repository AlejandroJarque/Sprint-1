<?php

class Animal1 {
    public $tipo;

    public function __construct($tipo) {
        $this -> tipo = $tipo;
    }

    public function __toString() {
        return "Este animal es un ". $this -> tipo;
    }
}

class Familia extends Animal1 {
    public $familia;

    public function __construct($tipo, $familia) {
        parent:: __construct($tipo);
        $this -> familia = $familia;
    }

    public function __toString() {
        return "Este animal es un tipo de ". $this -> tipo. ", y es de la familia de las ". $this -> familia;
    }
    
}

$miAnimal = new Familia("ave", "rapaces");
echo $miAnimal;
?>