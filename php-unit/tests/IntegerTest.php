<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
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
}