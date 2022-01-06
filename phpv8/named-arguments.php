<?php 

function sayHello($name, $age, $email = 'example@gmail.com')
{
    return "Hello my name is $name, my age $age and my email $email";
}

echo sayHello(age: 100, name: "Noval");