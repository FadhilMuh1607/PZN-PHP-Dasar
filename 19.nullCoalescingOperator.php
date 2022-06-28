<?php

$data = [
    "action" => "testing"//contoh jika array-nya diisi
];

// jika kita melakukan pengecekan pada sebuah array menggunkan if dengan method isset
// if(isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "nothing";
// }

// sama seperti ternary operator yang menyingkat sintaks, null coaliscing operator ini juga menyingkat sintaks
// yakni berfungsi pengecekan apakah data ini kosong/null atau tidak
$action = $data["action"] ?? "nothing"; 
echo $action . PHP_EOL;