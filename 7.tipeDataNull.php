<?php

// null adalah tipe data kosong

$nama = "Fadhl Muhammad";
$nama = NULL; // hurufnya case intensitive, artinya mau kapital, kecil, ataupun mix. Itu tidak masalah

$age = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// $nama = "Fadhil"; // ujicoba menggunakan is_null

// kita bisa mengecek, apakah disuatu variable tersebut datanya null atau tidak. Dengan menggunakan function is_null($variable);
// dan outputnya sendiri adalah nilai boolean
echo " Apakah Variable dari nama memiliki tipe data null ";
echo var_dump(is_null($nama)); // kita juga bisa menambahkan var_dump
echo "\n";

echo " Apakah Variable dari age memiliki tipe data null ";
echo is_null($age);
echo "\tHasilnya satu karena nilainya benar\n\n";

// selain dari men-set tipe datanya menjadi null, kita juga bisa menghapus sebuah variable menggunakan function unset($variable)
$contohnya = "mencoba unset";
unset($contohnya);

// echo $contohnya; // jika kita lihat hasilnya, maka tidak ditemukan variable dengan nama $contohnya, itu karena kita sudah menghapusnya
// var_dump(is_null($contohnya)); // hasilnya sama-sama error juga

// dibanding menggunakan is_null
// kita juga bisa menggunakan function isset($variable) untuk mengecek ada tidaknya variable dan nilainya apakah null atau tidak
echo "Hasil dari percobaan isset()\n";

$contohnya = "Fadhil"; // 1. Kita mencoba mendeklarasikan variable ulang untuk check di isset hasilnya seperti apa
// hasilnya akan true karena variable contohnya ada dan nilainya tidak null

$contohnya = null; // 2. Kita merubah variable dari contohnya menjadi null, untuk check hasil di isset seperti apa
// hasilnya false karena meski ia ada variablenya, namun ia mempunyai nilai null

var_dump(isset($contohnya)); // kita akan mengecek, apakah variable $contohnya ada atau tidak

