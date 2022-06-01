<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class MiscellaneousTest extends TestCase
{
    public function testIfFalse()
    {
        // Failure if value is true
        // $this->assertFalse(true);

        // Success
        $this->assertFalse(false);
    }

    public function testIfIsBoolean()
    {
        // Failure if is not boolean
        $this->assertIsBool(true);
    }

    public function testIfIsCallable()
    {
        // Failure if is not callable
        $func = function () {
            return "Hello World";
        };

        $this->assertIsCallable($func);
    }

    public function testIfIsIterable()
    {
        // Failure if is not iterable
        $this->assertIsIterable(arrayIterable());
    }

    public function testIfIsScalar()
    {
        // Test if is not scalar type like (object, iterable, resource etc)
        $this->assertIsScalar(true);
    }

    public function testIfNull()
    {
        $this->assertNull(null);
    }
}