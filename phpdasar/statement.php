<?php 

// If, Elseif dan Else Statament
$nilai = 80;

if ($nilai <= 90) {
    echo "Anda lulus dengan nilai {$nilai}";
} else if ($nilai <= 70) {
    echo "Anda lulus dengan nilai {$nilai}";
} else {
    echo "Anda terkena remed";
}

// Switch Statement
$hasil = 'D';
switch ($hasil) {
    case 'A':
        echo "Anda lulus dengan nilai sangat baik";
        break;
    case 'B':
        echo "Anda lulus dengan nilai baik";
        break;
    case 'C':
        echo "Anda lulus dengan nilai lumayan";
        break;
    case 'D':
        echo "Butuh di tingkatkan lagi kemampuannya";
        break;
    default:
        echo "Anda salah jurusan";
        break;
}

// Ternary operator (Alternatif if statement)
echo $nilai <= 80 ? 'Lulus' : 'Tidak Lulus';

// Null coalescing operator (Untuk mengecek tipe data null)
$arrays = [
    "result" => null
];

echo $arrays['result'] ?? 'Nothing';

// For loop (Perulangan for)
// Increment
for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan: $i" . PHP_EOL;
}

// Decrement
for ($i = 10; $i >= 1; $i--) {
    echo "Perulangan: $i" . PHP_EOL;
}

// While loop (Perulangan while)
$count = 10;
while ($count <= 10) {
    echo "Perulangan while ke: $count" . PHP_EOL;
$count++;
}

// Do While loop (Perulangan do while)
do {
    echo "Perulangan do while ke: $count" . PHP_EOL;
$count--;
} while ($count >= 1);

// For each loop (Perulangan array foreach)

$animals = ['Cat', 'Dog', 'Elephant'];

foreach ($animals as $animal) {
    echo $animal . PHP_EOL;
}

// foreach dengan key value pair
foreach ($animals as $key => $value) {
    echo "Key: $key => value: $value" . PHP_EOL;
}