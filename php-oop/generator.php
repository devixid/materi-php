<?php 

class Socialite
{
    public function getDrivers()
    {
        yield "facebook";
        yield "instagram";
        yield "twitter";
        yield "github";
    }
}

$socialite = new Socialite;

foreach ($socialite->getDrivers() as $sosial)
{
    echo $sosial;
}