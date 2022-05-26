<?php 

namespace Tests;

use App\Examples\Auth;
use Exception;
use PHPUnit\Framework\TestCase;
use App\Exceptions\RedisException;
use App\Exceptions\PostgreSqlException;
use App\Examples\User;

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

    public function testIfObjectEqualsWithAnotherObject()
    {
        $user1 = new User("novalfitrahramdhani@gmail.com");
        $user2 = new User("novalfitrahramdhani@gmail.com");
        $user3 = new User("johndoe123@example.org");

        // Failure if object not equals
        // $this->assertObjectEquals($user1, $user3);

        // This success
        $this->assertObjectEquals($user1, $user2);
    }

    public function testIfInstanceOf()
    {
        // Success if class instance of parent class
        $this->assertInstanceOf(Exception::class, new RedisException);
    }
}   