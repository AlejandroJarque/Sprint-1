<?php

$tiempoLlamada;

function llamar($tiempoLlamada) {

 
    if ($tiempoLlamada > 3) {
        
        $tiempoLlamada -= 3;
        $costeFinal = ($tiempoLlamada * 0.05) + 0.10;
        return sprintf("%.2f",$costeFinal);

    }else {

        return sprintf("%.2f",0.10);
    }

}

$miLlamada = llamar(5);
echo "El coste de su llamada es de ". $miLlamada. "€";

?>