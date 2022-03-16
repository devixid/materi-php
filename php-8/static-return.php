<?php 

class Foo
{
    public function test(): static
    {
        return new static();
    }
}

$foo = (new Foo)
        ->test();