<?php
$tiempoLlamada = 4;
$costeLlamada = 0.10;
$incrementoLlamada;
$costeFinal;

function Llamar($tiempoLlamada, $costeLlamada) {

    $incrementoLlamada = $costeLlamada;

    if($tiempoLlamada > 3) {
         for($i = 3; $i < $tiempoLlamada; $i++) {
            $incrementoLlamada += 0.05;

        }
    }
    
    return $incrementoLlamada;
}

$costeFinal = Llamar($tiempoLlamada, $costeLlamada);
echo "Su Tiempo de llamada es de ".$tiempoLlamada. " min, y su coste de ".sprintf("%.2f",$costeFinal)."€";
?>