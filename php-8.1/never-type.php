<?php 

function dd(mixed $input): never
{
    var_dump($input);
    
    exit;
}