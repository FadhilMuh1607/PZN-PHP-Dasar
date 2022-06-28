<?php

$nilai = 100;
$absen = 100;

// contoh sintaks if dan else
if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat anda Lulus" . PHP_EOL;
} else {
    echo "Maaf, anda tidak Lulus" . PHP_EOL;
}

// contoh sintaks if, else if, dan else
if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E" . PHP_EOL;
}

// pemakaian menggunakan petik 2
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70): 
    echo "Nilai anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai anda D" . PHP_EOL;
else :
    echo "Nilai anda E" . PHP_EOL;
endif;