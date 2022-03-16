<?php 

// Break
$count = 1;
while (true) {
    echo "Ini adalah perulangan ke: $count" . PHP_EOL;
$count++;

    if ($count > 10) {
        break;
    }
}

// Continue
for ($result = 0; $result <= 100; $result++) {
    if ($result % 2 == 0) {
        continue;
    }
    echo "Ganjil: $result" . PHP_EOL;
$result++;
}