<?php
require_once 'ClassAnimal.php';

class Gato extends Animal {

    public function Hablar() {
        return "miau miau"; 
    }
}

$miGato = new Gato("gato");
echo "Tengo un ". $miGato -> getNombre(). ", que hace ". $miGato -> Hablar();
?>