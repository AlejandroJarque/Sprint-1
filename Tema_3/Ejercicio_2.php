<?php
$animales = [];

$animales[0] = "gato";
$animales[1] = "perro";
$animales[2] = "oso";
$animales[3] = "caballo";
$animales[4] = "elefante";
$animales[5] = "gorilla";

$numAnimales = count($animales);
echo "El array tiene ", $numAnimales, " animales.", "\n";
foreach($animales as $animal) {
    echo $animal," ";
}

unset($animales[0]);
$animales = array_values($animales);

echo "\nQuitamos uno.\n";

foreach($animales as $indice => $animal) {
    echo "Posicion $indice: $animal\n";
}

?>