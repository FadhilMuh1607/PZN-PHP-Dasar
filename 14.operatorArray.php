<?php

$firstName = [
    "namaAwal" => "Fadhil"
];

$lastName = [
    "namaAkhir" => "Muhammad",
    "namaSamaran" => "Kyouya"
];

$fullName = $firstName + $lastName;
var_dump($fullName);

$a = [
    "namaAwal" => "Fadhil",
    "namaAkhir" => "Muhammad"
];

$b = [
    "namaAkhir" => "Muhammad",
    "namaAwal" => "Fadhil"
];

var_dump($a == $b);
var_dump($a === $b); // false karena beda posisi
var_dump($a !== $b);

