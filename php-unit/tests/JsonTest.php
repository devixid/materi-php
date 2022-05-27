<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Helmich\JsonAssert\JsonAssertions;

class JsonTest extends TestCase
{
    use JsonAssertions;

    public function testIfTrue()
    {
        $this->assertTrue(true);
    }
}