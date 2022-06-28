<?php

function sum(int $first, int $second): int // Return Type Declarations
{
    $total = $first + $second;
    return $total; // ini opsional, sesuai dengan keperluan kita
}

// disaat kita jalankan tanpa memasukannya kedalam variable, ia tidak akan tersimpan 
// jadi kita perlu menyimpannya kedalam sebuah variable
$hasil = sum(10,10);
var_dump($hasil);

$hasil = sum(100,70);
var_dump($hasil);


function hasilNilaiAkhir(int $nilaiUjian): string // Return Type Declarations
{
    if($nilaiUjian >= 80){
        return "A";
    } else if ($nilaiUjian >= 70){
        return "B";
    } else if ($nilaiUjian >= 60){
        return "C";
    } else if ($nilaiUjian >= 50){
        return "D";
    } else {
        return "E"; // jika kita rubah valuenya menjadi 1, ia akan tetap jalan. PHP akan mengkonversinya menjadi string
    }
    echo "Ups" . PHP_EOL; // ini tidak akan pernah dieksekusi, karena disaat kondisinya sesuai ia langsung menghentikan kode dibawahnya
}

$hasilUjian = hasilNilaiAkhir(93);
var_dump($hasilUjian);

$hasilUjian = hasilNilaiAkhir(-10);
var_dump($hasilUjian);
