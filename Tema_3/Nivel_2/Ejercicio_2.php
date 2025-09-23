<?php
$alumnos = array (
    "Alejandro" => array("notas" => [6,6,6,6,6]),
    "Jose" => array("notas" => [6,6,6,6,6]),
    "Miguel" => array("notas" => [6,6,6,6,6]),
    "Ignacio" => array("notas" => [6,6,6,6,6]),
    "Bernat" => array("notas" => [6,6,6,6,6]),
);

function MediaAlumno($alumnos) {
    $sumaTotal = 0;
    foreach($alumnos as $alumno => $notas) {

        $sumaNotas = 0;
        $cantidadNotas = count($notas["notas"]);

        foreach($notas["notas"] as $nota) {
            $sumaNotas += $nota;
        }

        $mediaAlumno = $sumaNotas / $cantidadNotas;
        echo "Media ". $alumno.": ". $mediaAlumno."\n";

        $sumaTotal += $mediaAlumno;
    }
    $mediaTotal = $sumaTotal / count($alumnos);
    return $mediaTotal;
}

/*MediaAlumno($alumnos);*/
echo "La media total de la clase es: ". MediaAlumno($alumnos);
?>