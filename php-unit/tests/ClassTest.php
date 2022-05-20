<?php 

namespace Tests;

use App\Auth;
use Exception;
use PHPUnit\Framework\TestCase;
use App\Exceptions\RedisException;
use App\Exceptions\PostgreSqlException;

class ClassTest extends TestCase
{
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
            [new PostgreSqlException, new RedisException]
        );
    }
}