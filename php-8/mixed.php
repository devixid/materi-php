<?php 

function sum(mixed ...$values) {
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }

    return $total;
}

echo sum(10, 10, "10", "10");