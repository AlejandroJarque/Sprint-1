<?php
class Coche {
    public $enMarcha;

    public function __construct($enMarcha){
        $this -> enMarcha = $enMarcha;
    }

    public function Acelerar() {

        $miVehiculo = __CLASS__;
        $miFuncion = __FUNCTION__;

        if($this-> enMarcha === true){
            return "Mi vehiculo de clase ". $miVehiculo. " esta en marha, y empieza a ". $miFuncion;
        } else{
            return "Mi vehiculo de clase ". $miVehiculo. " no esta en marha, asi que no puede ". $miFuncion;
        }
    }
}

$miCoche = new Coche(true);
echo $miCoche -> Acelerar();

?>