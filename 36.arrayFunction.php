<?php

$data = [1,2,3,4,5,6,7,8,9,10];

// penggunaan array map, biasanya digunakan untuk membuat array baru
$ujicobaArrayMap = array_map(fn($value) => $value * 10, $data);
var_dump($ujicobaArrayMap);

rsort($data);
var_dump($data);

sort($data);
var_dump($data);


var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "namaAwal" => "Fadhil",
    "namaAkhir" => "Muhammad"
];

    var_dump(array_keys($person));
    var_dump(array_values($person));