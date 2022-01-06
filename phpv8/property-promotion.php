<?php 

class People
{
    public function __construct(public string $name, public string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}