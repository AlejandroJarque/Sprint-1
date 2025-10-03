<?php
$palabras = ["manual", "mar", "maleta", "muestra"];
$letra = 'a';


function validarLetra(array $palabras, string $letra) {

    foreach($palabras as $palabra) {

        $letraEncontrada = strpos($palabra, $letra);

        if($letraEncontrada === false) {
            return false;
        }
    }

    
    return true;

}

echo var_dump(validarLetra($palabras, $letra));
?>