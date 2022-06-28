<?php

function foo(){
    echo "TWO" . PHP_EOL;
}

function war(){
    echo "WAR" . PHP_EOL;
}

$functiondariFoo = "foo";
$functiondariFoo();
$functiondariWar = "war";
$functiondariWar();

function ucapanHai(string $nama, $filter)
{
    $akhirNilai = $filter($nama);
    echo "Halo $akhirNilai" . PHP_EOL;
}

function contohFunction(string $nama): string
{
    return "contoh function $nama";
}

ucapanHai("Fadhil", "contohFunction");
ucapanHai("Fadhil", "strtoupper"); 
ucapanHai("Fadhil", "strtolower"); 