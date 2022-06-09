<?php 

// Assign by reference
$name = "Noval Ramdhani";

$otherName = &$name;
$otherName = "Ramdhani";

echo $name . PHP_EOL;

// Pass by reference
function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;