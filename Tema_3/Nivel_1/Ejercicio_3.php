<?php
$palabras = ["manual", "mar", "maleta", "muestra"];
$letra = 'm';

function validacion($palabras, $letra) {
    foreach($palabras as $palabra) {

        $palabraConLetra = false;
        
        for ($i = 0; $i < strlen($palabra); $i++) {
           if( $palabra[$i] == $letra) {
                $palabraConLetra = true;
                break;
           }
       }

       if(!$palabraConLetra) {
            return false;
       }
    }

    return true;
}

echo var_dump(validacion($palabras, $letra));
?>