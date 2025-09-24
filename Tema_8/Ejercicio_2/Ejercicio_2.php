<?php

class SpeedChecker {

    public function __construct(private int $number) {}

    public static function tooFast($number) {
        if($number < 30) {
            $speed = "Molt lent";
        }else if($number >= 30 && $number <= 60){
            $speed = "Velocitat adecuada";
        }else if($number >= 61 && $number <= 80) {
            $speed = "Exes lleu";
        }else if($number >= 81 && $number <= 100) {
            $speed = "Exes moderat";
        }else{
            $speed = "Exes greu";
        }

        return $speed;
    }
}
?>