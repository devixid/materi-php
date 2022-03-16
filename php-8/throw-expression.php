<?php 

$arrays = [
    'count' => null
];

echo $arrays['count'] ?? throw new Exception('Cannot be null');