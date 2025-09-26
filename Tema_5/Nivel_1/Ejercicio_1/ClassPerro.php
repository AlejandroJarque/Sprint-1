<?php
require_once 'ClassAnimal.php';

class Perro extends Animal {

    public function Hablar() {
        return "guau guau"; 
    }
}

$miPerro = new Perro("perro");
echo "Tengo un ". $miPerro -> getNombre(). ", que hace ". $miPerro -> Hablar();
?>