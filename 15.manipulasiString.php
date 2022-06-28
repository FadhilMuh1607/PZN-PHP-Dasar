<?php

$name = "Fadhil Muhammad";
echo "Nama : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;  // gabungan antara string dan juga tipe data lain (number)

// mengkonversikan data menjadi tipe data yang diinginkan
$valueString = (string)100;
var_dump($valueString);

$valueNumber = (int)"16";
var_dump($valueNumber);

$valueFloat = (float)"16.7";
var_dump($valueFloat);

// mengakses value dari variable
$coba = "PHP";
echo $coba[0] . PHP_EOL;
echo $coba[1] . PHP_EOL;
echo $coba[2] . PHP_EOL;
// echo $coba[3] . PHP_EOL; // jika mengakses melebihi batas maka akan terjadi error

// variable parsing
$nama = "Fadhil Muhammad";
echo "Ayo " . $nama . ", Selamat Belajar PHP" . PHP_EOL;
echo "Ayo $nama, Selamat Belajar PHP" . PHP_EOL;

// Curly brace
$var = "Fadhil";
echo "This is {$var}lah " . PHP_EOL;