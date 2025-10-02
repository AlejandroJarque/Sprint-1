<?php

$suma = [9999, 9999, 9999];

function Sumar($suma) {
    return array_sum($suma);
}

function CalcularMedia($suma) {
    $media = $suma / 3;
    return $media;
}

function Clasificar($media) {
    if($media < 4000) {
        echo "Categoria: Principiante";
    }else if($media < 8000){
        echo "Categoria: Intermedio";
    }else if($media <= 9999) {
        echo "Categoria: Profesional";
    }else {
        echo "Puntuacion final fuera de rango, revisa las calificaciones";
    }
}

$sumaP = Sumar($suma);
echo "La suma de las 3 puntuaciones es: ". $sumaP."\n";

$mediaP = CalcularMedia($sumaP);
echo "La media de las 3 puntuaciones es: ".$mediaP."\n";

$clasificacion = Clasificar($mediaP);
echo $clasificacion;
?>