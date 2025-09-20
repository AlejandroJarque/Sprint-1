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
function operar($X, $Y, $my_operacion){

    switch($my_operacion) {
        case "+":
            return $X + $Y;
            break;
        case "-":
             return $X - $Y;
             break;
        case "*":
            return $X * $Y;
            break;
        case "/":
             if($Y == 0){
            return "No se puede dividir entre 0";
            }
            return $X / $Y;
            break;
        default:
            return "valores incorrectos";
    }
}

echo operar($X,$Y, "+"). "\n";
echo operar($X,$Y, "-"). "\n";
echo operar($X,$Y, "*"). "\n";
echo operar($X,$Y, "/"). "\n";

?>
