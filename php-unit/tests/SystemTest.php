<?php 

namespace Tests;

use Data\Auth;
use Data\Exceptions\MySqlException;
use Data\Exceptions\PostgreSqlException;
use Data\Exceptions\RedisException;
use Exception;
use PDOException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\Environment\OperatingSystem;

class SystemTest extends TestCase
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

    public function testIfClassHasAttribute()
    {
        // Success if class has attribute
        // This failure
        // $this->assertClassHasAttribute('foo', Auth::class);
        
        // This Success
        $this->assertClassHasAttribute('credentials', Auth::class);
    }

    public function testIfClassHasStaticAttribute()
    {
        // Success if class has static attribure
        // This failure
        // $this->assertClassHasStaticAttribute('foo', Auth::class);

        // This Success
        $this->assertClassHasStaticAttribute('login', Auth::class);
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

    public function testIfStringContainsWithString()
    {
        // Success if string contains with string
        // This failure
        // $this->assertStringContainsString('foo', 'bar');

        $this->assertStringContainsString('cat', 'cat');
    }

    public function testIfStringHasIgnoreCaseWithString()
    {
        // Success if string contains ignore case with string
        // This failure
        // $this->assertStringContainsStringIgnoringCase('Laravel', 'Rails');

        // This Success
        $this->assertStringContainsStringIgnoringCase('React', 'React');
    }

    public function testIfOnlyContainsTypeElements()
    {
        $animals = ['Dog', 'Cat', 'Elephant'];

        // Success if string contains with type
        // This failure
        // $this->assertContainsOnly('array', $animals);

        // This success
        $this->assertContainsOnly('string', $animals);
    }

    public function testIfContainsHasIntanceOf()
    {
        // Success if class contains instance of parent class
        // This failure
        // $this->assertContainsOnlyInstancesOf(
        //     Exception::class,
        //     [new Auth, new OperatingSystem]
        // );

        // This success
        $this->assertContainsOnlyInstancesOf(
            Exception::class,
            [new MySqlException, new PostgreSqlException, new RedisException]
        );
    }

    public function testIfHasCount()
    {
        
    }
}