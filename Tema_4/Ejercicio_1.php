<?php

class Empleado {
    public $name;
    public $sueldo;

    public function __construct($name, $sueldo) {
        $this -> name = $name;
        $this -> sueldo = $sueldo;
    }

    public function Impuestos() {
        if($this -> sueldo >= 6000) {
            return "El empleado ". $this -> name. ", ha de pagar impuestos";
        }else{
            return "El empleado ". $this -> name. ",  no ha de pagar impuestos";
        }
    }
}

$miEmpleado = new Empleado("Ismael", 6000);
echo $miEmpleado -> Impuestos();

?>