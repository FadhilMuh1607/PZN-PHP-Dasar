<?php

$nilai = "A";

if ($nilai == "A") {
    echo "Anda lulus dengan nilai yang bagus" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C") {
    echo "Selamat Anda lulus" . PHP_EOL;
} else if  ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
} else {
    echo "Nilai anda kurang memuaskan" . PHP_EOL;
}

/* 
Dibanding kita melakukan seperti diatas, yang mana pengecekkannya adalah satu nilai dengan menggunakan == 
Kita bisa juga menggunakan switch statement untuk lebih mudah
*/

switch($nilai) {
    case "A" :
        echo "Anda lulus dengan nilai yang bagus" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Selamat Anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default :
        echo "Nilai anda kurang memuaskan" . PHP_EOL;
}

switch($nilai) :
    case "A" :
        echo "Anda lulus dengan nilai yang bagus" . PHP_EOL;
        echo "Anda Masuk 10 Besar" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Selamat Anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default :
        echo "Nilai anda kurang memuaskan" . PHP_EOL;
endswitch;
