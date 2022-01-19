<?php 

echo (int)12.5 . '<br>'; // 12
echo (int)12.1 . '<br>'; // 12
echo (int)12.9 . '<br>'; // 12
echo (int)-12.9 . '<br>'; // -12

$amount =  (int)'100 USD';
echo $amount; // 100

$qty = null;
echo (int)$qty; // 0