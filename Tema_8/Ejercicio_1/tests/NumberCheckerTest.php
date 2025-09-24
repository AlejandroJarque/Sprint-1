<?php
require 'vendor/autoload.php';
require_once 'Ejercicio_1.php';

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    public function testIsEven() {
        $evenNumber = new NumberChecker(8);
        $oddNumber = new NumberChecker(3);

        $this -> assertTrue($evenNumber->isEven());
        $this -> assertFalse($oddNumber->isEven());
    }

    public function testIsPositive() {
        $positive = new NumberChecker(7);
        $negative = new NumberChecker(-5);

        $this -> assertTrue($positive -> isPositive());
        $this -> assertFalse($negative -> isPositive());
    }
}
?>