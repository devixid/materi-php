<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;
use Helmich\JsonAssert\JsonAssertions;

class JsonTest extends TestCase
{
    use JsonAssertions;

    public function testIfJsonStringEqualsWithJsonString()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode(['name' => 'John Doe']),
            json_encode(['name' => 'John Doe'])
        );
    }
}