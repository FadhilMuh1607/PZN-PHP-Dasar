<?php

$gender = "PRIA";
$hi = null;

// jika kita menggunakan if dan else
// if ($gender == "PRIA") {
//     $hi = "Hai Bro!";
// } else {
//     $hi = "Hai Nona!";
// }
// echo $hi . PHP_EOL;

// kita bisa menyingkatnya menggunakan ternary operator
$hi = $gender == "RIA" ? "Hai Bro!" : "Hai Nona!";
echo $hi . PHP_EOL;

// TERNARY OPERATOR DIGUNAKAN UNTUK MENYINGKAT IF DAN ELSE