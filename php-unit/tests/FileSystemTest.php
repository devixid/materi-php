<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class FileSystemTest extends TestCase
{
    public function testIfDirectoryExists()
    {
        // Failure if directory is not exists
        // $this->assertDirectoryExists('../app/controllers');

        // This success
        $this->assertDirectoryExists('../php-8.0');
    }
}