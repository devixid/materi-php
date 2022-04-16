<?php 

$nilai = 'A';

// Instead of
switch ($nilai) {
    case 'A':
        echo "Selamat anda lulus dengan nilai terbaik";
        break;
    case 'B':
        echo "Selamat anda lulus dengan nilai baik";
        break;
    case 'C':
        echo "Selamat anda lulus dengan nilai lumayan";
        break;
    case 'D':
        echo "Anda lulus tapi dengan nilai kurang";
        break;
    default:
        echo "Anda tidak lulus";
        break;
}

// You can
echo match ($nilai) {
    'A' => "Selamat anda lulus dengan nilai terbaik",
    'B' => "Selamat anda lulus dengan nilai baik",
    'C' => "Selamat anda lulus dengan nilai lumayan",
    'D' => "Anda lulus tapi dengan nilai kurang",
    default => "Anda tidak lulus"
};