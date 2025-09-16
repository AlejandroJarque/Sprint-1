<?php
$nota = 4.4;
$nota_max = 10;

function division($nota, $nota_max){

    $porcentaje = round(($nota / $nota_max) * 100);

    if($porcentaje < 0 || $porcentaje > 100) {
        return "nota fuera de rango";
    }else if($porcentaje >= 60) {
        return "Primera division";
    }else if($porcentaje >= 45 && $porcentaje <= 59) {
        return "Segunda division";
    }else if($porcentaje >= 33 && $porcentaje <= 44) {
        return "Tercera division";
    }else{
        return "Has de repetir";
    }
}

echo division($nota, $nota_max);
?>