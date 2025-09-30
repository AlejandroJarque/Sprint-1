<?php
$alumnos = array (
    "Alejandro" => array("notas" => [6,6,6,6,6]),
    "Jose" => array("notas" => [6,6,6,6,6]),
    "Miguel" => array("notas" => [6,6,6,6,6]),
    "Ignacio" => array("notas" => [6,6,6,6,6]),
    "Bernat" => array("notas" => [6,6,6,6,6]),
);


function recorrerNotas($notas) {

    foreach($notas["notas"] as $nota) {
        return $notas["notas"];
    }

}

function mediaAlumno($notas){

    $numNotas = count($notas["notas"]);
    $sumaNotas = 0;

    foreach(recorrerNotas($notas) as $nota) {
        $sumaNotas += $nota;
    }

    $mediaAlumno = $sumaNotas / $numNotas;

    return $mediaAlumno;
}

function mediaClase($alumnos) {
    
    $numAlumnos = count($alumnos);
    $sumaNotasAlumnos = 0;

    foreach($alumnos as $alumno) {
        $sumaNotasAlumnos += mediaAlumno($alumno);
    }
   
    $mediaClase = $sumaNotasAlumnos / $numAlumnos;
    return $mediaClase;
}

echo "La media de Alejandro es: ". mediaAlumno($alumnos["Alejandro"])."\n";
echo "La media de Jose es: ". mediaAlumno($alumnos["Jose"])."\n";
echo "La media de Miguel es: ". mediaAlumno($alumnos["Miguel"])."\n";
echo "La media de Ignacio es: ". mediaAlumno($alumnos["Ignacio"])."\n";
echo "La media de Bernat es: ". mediaAlumno($alumnos["Bernat"])."\n"."\n";
echo "La media de la Clase es: ". mediaClase($alumnos)

?>