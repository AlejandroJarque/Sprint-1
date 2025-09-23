<?php
$miLista1 = ["Arnau", "Alejandro", "Marc", "Jonathan", "Antonela", "Fran"];
$miLista2 = ["Arnau", "Ignacio", "Carlos", "Jose", "Pau", "Fran"];

function Listar_1($miLista1) {
    foreach($miLista1 as $nom1) {
        echo $nom1. " ";
    } 
}

function Listar_2($miLista2) {
    foreach($miLista2 as $nom2) {
        echo  $nom2. " ";
    }
}

function EnComun($miLista1,$miLista2) {
    foreach ($miLista1 as $nombres1){
        foreach($miLista2 as $nombres2) {
            if($nombres1 === $nombres2) {
                echo $nombres1. " ";
            }
        }
    }
}

Function Unir($miLista1, $miLista2) {
    $unidas = array_merge($miLista1,$miLista2);
    $final = array_unique($unidas);
    foreach($final as $nom) {
        echo $nom. " ";
    }
}


echo "Lista 1: ";
Listar_1($miLista1);

echo "\n"."Lista 2: ";
Listar_2($miLista2);

echo "\n". "Lista de invitados en comun: ";
EnComun($miLista1,$miLista2);

echo "\n". "Invitados totales: ";
Unir($miLista1, $miLista2);
?> 