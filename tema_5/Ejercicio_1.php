<?php
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this -> name = $name;
    }

    abstract public function Habla();

    public function getNombre() {
        return $this -> name;
    }
}

class Perro extends Animal {

    public function Habla() {
        return "guau guau"; 
    }
}

class Gato extends Animal {

    public function Habla() {
        return "miau miau"; 
    }
}

$miPerro = new Perro("perro");
$miGato = new Gato("gato");

echo "Tengo un ". $miPerro -> getNombre(). ", que hace ". $miPerro -> Habla(). ", y un ".
      $miGato -> getNombre(). ", que hace ". $miGato -> Habla();
?>