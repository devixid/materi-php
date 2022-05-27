<?php 

namespace App\Examples;

class Auth
{
    public static string $login;
    
    public function __construct(public string $email, public string $credentials)
    {
        $this->email = $email;
    }
}