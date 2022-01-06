<?php 

final class SocialMedia
{
    final public function authenticate(string $user, string $pass)
    {
        return "You are login";
    }
}

// final class tidak bisa melakukan pewarisan (otomatis akan error)
class Facebook extends SocialMedia
{
    // sama halnya juga pada method
    public function authenticate(string $user, string $pass)
    {

    }
}

$facebook = new Facebook;