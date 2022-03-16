<?php

// Operator aritmatika / matematika
var_dump(10 + 10);
var_dump(10 - 5);
var_dump(10 / 5);
var_dump(10 * 10);
var_dump(100 % 2 == 0);
var_dump(5 ** 5);

// Operator penugasan
$angka = 100;
var_dump($angka += 10);
var_dump($angka -= 10);
var_dump($angka /= 10);
var_dump($angka *= 10);
var_dump($angka %= 10);
var_dump($angka **= 10);

// Operator Perbandingan
var_dump(10 == 10);
var_dump(10 === '10');
var_dump(10 < 10);
var_dump(10 > 10);
var_dump(10 <= 10);
var_dump(10 >= 10);
var_dump(10 != 10);
var_dump(10 !== 10);

// Operator Logika
var_dump(!true);
var_dump(true && true);
var_dump(true || false);