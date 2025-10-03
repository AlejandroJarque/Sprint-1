<?php

$alumnos = [
    "Alejandro" => [5,5,5,5,5],
    "Jose" => [6,6,6,6,6,],
    "Miguel" => [7,7,7,7,7],
    "Ignacio" => [9,9,9,9,9],
    "Bernat" => [4,4,4,4,4]
];

function calcularMedia($alumnos){

    $totalNotas = array_sum($alumnos);
    
    $media = $totalNotas / 5;

    return $media;
}

echo "La media de Alejandro es: ". calcularMedia($alumnos["Alejandro"])."\n";
echo "La media de Jose es: ". calcularMedia($alumnos["Jose"])."\n";
echo "La media de Miguel es: ". calcularMedia($alumnos["Miguel"])."\n";
echo "La media de Ignacio es: ". calcularMedia($alumnos["Ignacio"])."\n";
echo "La media de Bernat es: ". calcularMedia($alumnos["Bernat"])."\n";

$mediasAlumnos = [];

array_push($mediasAlumnos, calcularMedia($alumnos["Alejandro"]),calcularMedia($alumnos["Jose"]),calcularMedia($alumnos["Miguel"]),
calcularMedia($alumnos["Ignacio"]),calcularMedia($alumnos["Bernat"]));

echo "La media de la Clase es: ". calcularMedia($mediasAlumnos);

?>