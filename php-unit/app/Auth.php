<?php 

namespace App;

class Auth
{
    public string $credentials;

    public static string $login;

    public function __construct(public string $email)
    {
        $this->email = $email;
    }
}