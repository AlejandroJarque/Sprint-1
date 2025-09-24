<?php
require 'vendor/autoload.php';
require_once 'Ejercicio_2.php';

use PHPUnit\Framework\TestCase;

class SpeedCheckerTest extends TestCase{

    public function testTooSlow() {
        $this -> assertEquals("Molt lent", SpeedChecker::tooFast(21));
    }

    public function testSlow() {
        $this -> assertEquals("Velocitat adecuada", SpeedChecker::tooFast(33));
    }

    public function testFast() {
        $this -> assertEquals("Exes lleu", SpeedChecker::tooFast(72));
    }

    public function testVeryFast() {
        $this -> assertEquals("Exes moderat", SpeedChecker::tooFast(90));
    }

    public function testTooFast() {
        $this -> assertEquals("Exes greu", SpeedChecker::tooFast(110));
    }

}
?>