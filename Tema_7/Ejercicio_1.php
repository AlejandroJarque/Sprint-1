<?php

class CeroException extends Exception{}
class NegativoException extends Exception{}

function Dividir($divisor, $dividendo) {
    if($divisor == 0 || $dividendo == 0) {
        throw new CeroException("No se puede dividir entre 0");
    }elseif($divisor < 0 || $dividendo < 0) {
        throw new NegativoException("No se pueden dividir numeros negativos");
    }

    return $divisor / $dividendo;
}

try{
    echo Dividir(-2, 5);
}catch(CeroException $e) {
    echo $e -> getMessage();
}catch(NegativoException $e) {
    echo $e -> getMessage();
}
?>