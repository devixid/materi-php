<?php 

// Tipe data number
// Int
var_dump(100);
// Floating point
var_dump(1.5);

// Tipe data boolean
var_dump(true);
var_dump(false);

// Tipe data string
echo "Ini adalah string";

// Heredoc
echo <<<STRING
    Ini adalah multiline string pada php
STRING;

// Nowdoc
echo <<<'NOWDOCSTRING'
    Ini adalah multiline nowdoc string pada php
NOWDOCSTRING;

// Tipe data null
$null = null;

// Tipe data array
$animals = ['Cat', 'Dog', 'Wolf', 'Elephant'];

// Menampilkan isi array animals dimulai dari index 0
echo $animals[0];
var_dump($animals);

// Array mapping key and value pair
$people = [
    "name" => "Noval Ramdhani",
    "email" => "noval@dev.org",
    "valid" => true
];

echo $people["name"];