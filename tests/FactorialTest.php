<?php
require './src/Factorial.php';
use PHPUnit\Framework\TestCase;
class FactorialTest extends TestCase
{
    public function testFactorial()
    {
        $newFactorial=new Factorial();
                // n = 0
        $this->assertEquals(1, $newFactorial->factorialCalculator(0));
                // n = 1
        $this->assertEquals(1, $newFactorial->factorialCalculator(1));
                // n = 5
        $this->assertEquals(120, $newFactorial->factorialCalculator(5));   
                // n = -3
        $this->assertEquals(null,$newFactorial->factorialCalculator(-3));
                // n = 1.5
        $this->assertEquals(null,$newFactorial->factorialCalculator(1.5));
                // n = false
        $this->assertEquals(null,$newFactorial->factorialCalculator(false));
                // n = abc
        $this->assertEquals(null,$newFactorial->factorialCalculator('abc'));   
    }
}





?>