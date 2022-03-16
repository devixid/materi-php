<?php 

// Function
function sayHello()
{
    echo "Hello, good morning";
}

sayHello() . PHP_EOL;

// Function dengan argument parameter
function sayHelloWithArg($name)
{
    echo "Hello $name, good morning";
}

sayHelloWithArg("Noval");

// Function dengan deklarasi tipe
function sayHelloWorldWithName(string $name)
{
    echo "Hello $name, Hello World";
}

sayHelloWorldWithName("John");

// Function dengan length-variable argument (rest parameter)
function sum(int ...$values) 
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    return $total;
}

echo sum(10, 10, 10, 10 ,10,10);

// Function dengan default argument parameter
function sayHelloWithDefaultArg(string $name, int $age = 0)
{
    echo "Hello my name is $name and my age $age";
}

sayHelloWithDefaultArg("Noval");

// Function dengan return value
function sayName($name)
{
    return "Hello my name is $name";
}

echo sayName("Luna");

// Anonymous function (fungsi tanpa nama)
$hello = function () {
    echo "Hello World";
};

$hello();

$helloWithArg = function ($name) {
    echo "Hello $name";
};

$helloWithArg("John");

// Arrow function (muncul pada php versi 7.4)
$sum = fn ($sum) => $sum + $sum;

echo $sum(10);

// Recursive Function (Factorial dan factorial recursive)

function factorialLoop(int $total) {
    if ($total <= 0) {
        return 1;
    }

    $result = 1;
    for ($i = $total; $i >= 1; $i--) {
        $result *= $i;
    }

    return $result;
}

echo factorialLoop(0);
echo factorialLoop(1);
echo factorialLoop(2);
echo factorialLoop(3);
echo factorialLoop(4);
echo factorialLoop(5);

function factorialRecursiveLoop(int $total) {
    if ($total <= 0) {
        return 1;
    } else {
        return $total * factorialRecursiveLoop($total - 1);
    }
}

echo factorialRecursiveLoop(0);
echo factorialRecursiveLoop(1);
echo factorialRecursiveLoop(2);
echo factorialRecursiveLoop(3);
echo factorialRecursiveLoop(4);
echo factorialRecursiveLoop(5);