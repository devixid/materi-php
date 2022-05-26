<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testIfArrayHasKey()
    {
        $users = [
            'name' => 'Noval Ramdhani',
            'username' => 'novalramdhani',
            'email' => 'noval@dev.org',
            'valid' => true
        ];

        // Success if array has the key
        // This failure
        // $this->assertArrayHasKey('job', $animals);

        // This Success
        $this->assertArrayHasKey('name', $users);
    }

    public function testIfElementHasContains()
    {
        $array = [
            100,
            200,
            300,
            400,
            500
        ];

        // Success if element has contains
        // This failure
        // $this->assertContains(1000, $array);

        // This Success
        $this->assertContains(100, $array);
    }

    public function testIfHasCount()
    {
        // Failure if result is not same with count
        // $this->assertCount(10, [1,2,3,4,5]);

        // This success
        $this->assertCount(5, [1,2,3,4,5]);
    }
    
    public function testIfEmpty()
    {
        // Failure if value is not empty
        // $this->assertEmpty(100);

        // This success
        $this->assertEmpty([]);
    }

    public function testIfIsArray()
    {
        // Failure if is not array
        $array = [1,2,3,4,5];
        $this->assertIsArray($array);
    }
}