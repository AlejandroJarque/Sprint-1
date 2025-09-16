<?php
$X = 10;
$Y = 20;

$N = 5.5;
$M = 15.5;

echo $X."\n". $Y."\n";
echo $X + $Y."\n";
echo $X - $Y."\n";
echo $X / $Y."\n";
echo $X % $Y."\n";

echo $N."\n". $M."\n";
echo $N + $M."\n";
echo $N - $M."\n";
echo $N / $M."\n";
echo $N % $M."\n";

echo $X * 2,"\n";
echo $Y * 2,"\n";
echo $N * 2,"\n";
echo $M * 2,"\n";
echo $X + $Y + $N + $M,"\n";
echo $X % $Y % $N % $M,"\n";


$my_operacion = "+";
function operacion($X, $Y, $my_operacion){
    if($my_operacion == "+"){
        return $X + $Y;
    }else if($my_operacion == "-"){
        return $X - $Y;
    }else if($my_operacion == "*"){
        return $X * $Y;
    }else if($my_operacion == "/"){
        if($Y == 0){
            return "No se puede dividir entre 0";
        }
        return $X / $Y;
    }else {
        return "Operacion no permitida";
    }
}

echo operacion($X,$Y, "+"). "\n";
echo operacion($X,$Y, "-"). "\n";
echo operacion($X,$Y, "*"). "\n";
echo operacion($X,$Y, "/"). "\n";

?>
