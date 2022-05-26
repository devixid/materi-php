<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function testIfGreaterThan()
    {
        // Failure if number not greater than with another number
        // $this->assertGreaterThan($number2, $number1);
        $number1 = 10;
        $number2 = 20;

        $this->assertGreaterThan($number1, $number2);
    }

    public function testIfNumberGreaterThanOrEqual()
    {
        // Failure if number not equal or greater than with another number
        // $this->assertGreaterThanOrEqual(50, 100);

        $this->assertGreaterThanOrEqual(10, 10);
        $this->assertGreaterThanOrEqual(100, 1000);
    }

    public function testIfIsFloatingNumber()
    {
        // Failure if is not float
        $this->assertIsFloat(1.5);
    }

    public function testIfIsIntegerNumber()
    {
        // Failure if is not integer
        $this->assertIsInt(100);
    }
}