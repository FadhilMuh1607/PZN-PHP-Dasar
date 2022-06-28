<?php

$nama = "Fadhil";

$namalain = &$nama; //reference

$namalain = "Kyouya";

echo $nama . PHP_EOL;

function increment(int &$nilai)
{
    $nilai++;
}

$counter = 1;
increment($counter); // defaultnya ia akan tetap satu meski kita masukan kedalam parameter function, karena value dari variable counter tetap 1
echo $counter . PHP_EOL;

function &getValue(){
    static $value = 100;
    return $value;
}

echo getValue() . PHP_EOL;

$a = &getValue();
$a = 50;

$b = &getValue();
echo $b . PHP_EOL;