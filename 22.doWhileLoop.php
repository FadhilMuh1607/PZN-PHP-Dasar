<?php

// menggunakan while
// $counter = 1;
// while($counter <= 10){
//     echo "Hello while loop counter ke-$counter" . PHP_EOL;
//     $counter++; 
// }

// Perbedaan yang mencolok antara while do dengan do while adalah dari kondisinya
// jika while kondisinya dicheck dari awal, maka do while itu pengecekkannya terdapat diakhir
// sehingga meskipun nilainya false ia tetap akan melakukan looping meski sekali

// sintaks do while
$counter = 100; // dari awal statement looping ini bernilai false
do {
    echo "Hello do while loop counter ke-$counter" . PHP_EOL;
    $counter++; 
} while($counter <= 10); // outputnya akan menjalankan satu kali looping

// sintaks do while, dengan statement benar
$counter = 1;
do {
    echo "Hello while loop counter ke-$counter" . PHP_EOL;
    $counter++; 
} while($counter <= 10);