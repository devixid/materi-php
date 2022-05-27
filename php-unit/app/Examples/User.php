<?php 

namespace App\Examples;

class User 
{
    public function __construct(private string $email)
    {
        $this->email = $email;
    }

    public function toString(): string
    {
        return $this->email;
    }

    public function equals(self $other): bool
    {
        return $this->toString() === $other->toString();
    }

    public function ensureIsValidEmail(string $email): mixed
    {
        //
    }
}