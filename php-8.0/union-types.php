<?php 

// untuk menggunakan union type gunakan tanda pipe |
function sum(int|string ...$values) {
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }

    return $total;
}

echo sum(10, 10, "10", "10");