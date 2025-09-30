<?php
$palabras = ["manual", "mar", "maleta", "muestra"];
$letra = 'm';

function recorrerArray($palabras) {
    
    foreach($palabras as $palabra) {
        return $palabras;
    }
}


function validarLetra($palabras, $letra) {

     foreach(recorrerArray($palabras) as $palabra) {

        if(strpos($palabra, $letra) === false) {
            return false;
            break;
        }
    }
   
    return true;
}

echo var_dump(validarLetra($palabras, $letra));
?>