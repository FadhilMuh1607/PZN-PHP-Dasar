<?php

for ($counter = 0; $counter <= 100; $counter++){
    if ($counter % 2 == 1){ // jika kita ingin mengubah outputnya menjadi genap kita tinggal ganti 0 menjadi 1
        continue; // secara fungsinya continue akan men-skip angka yang digunakannya
    }
    echo "Counter : " . $counter . PHP_EOL;
} // jadi nilai yang dicontinue akan dihentikan, dan diskip ke nilai berikutnya