<?php 

class SayHello
{
    public function __toString()
    {
        return "Hello from " . get_class($this);
    }
}

function sayHello(string|Stringable $say) {
    echo $say;
}

sayHello(new SayHello);
sayHello('Noval');