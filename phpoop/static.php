<?php 

class Math {
    public static $pi = '';

    public static function sum(int ...$values)
    {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }

        return $total;
    }
}

echo Math::$pi;
echo Math::sum(10,10,10,10,10,10,10,10,10,10,10,10,10);