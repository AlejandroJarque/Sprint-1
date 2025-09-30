<?php
$p1;
$p2;
$p3;

function Sumar($p1, $p2, $p3) {
    $suma = $p1 + $p2 + $p3;
    return $suma;
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

$sumaP = Sumar(9999, 9999, 9999);
echo "La suma de las 3 puntuaciones es: ". $sumaP."\n";

$mediaP = CalcularMedia($sumaP);
echo "La media de las 3 puntuaciones es: ".$mediaP."\n";

$clasificacion = Clasificar($mediaP);
echo $clasificacion;
?>