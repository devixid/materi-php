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
}