<?php
$palabras = ["manual", "mar", "maleta", "muestra"];
$letra = 'm';

/*function validar($palabras, $letra) {
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
}*/

function recorrerArray($palabras) {
    
    foreach($palabras as $palabra) {
        yield $palabra;
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