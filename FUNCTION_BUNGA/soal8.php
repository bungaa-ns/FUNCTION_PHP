<?php
declare(strict_types=1); 

function addNumbers(int $a, int $b, bool $printSum): int {
    $sum = $a + $b;
    if ($printSum) {
        echo 'Jumlahnya adalah ' . $sum . '<br>';
    }
    return $sum;
}

// Memanggil fungsi dengan tipe data yang benar
addNumbers(1, 2, true); // Ini valid

// Memeriksa apakah parameter kedua bisa menjadi integer dan casting jika perlu
$a = 1;
$b = '2'; // String yang bisa dikonversi menjadi integer

// Memastikan $b adalah angka yang valid
if (is_numeric($b)) {
    addNumbers($a, (int)$b, true); // Casting $b menjadi integer
} else {
    echo 'Parameter kedua harus berupa angka.<br>';
}

// Memeriksa input lain yang tidak valid
$b2 = 'something';

if (is_numeric($b2)) {
    addNumbers($a, (int)$b2, true); // Casting $b2 jika valid
} else {
    echo 'Parameter kedua harus berupa angka yang valid.<br>';
}
?>
