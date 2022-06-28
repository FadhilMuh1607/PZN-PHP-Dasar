<?php

// didalam Array php kita bisa gunakan dengan tipe data yang berbeda
$nilai = array(1, 2, 3, 3.7, 4, 5); // disini kita menambakan float
var_dump($nilai); // untuk melihat hasilnya

// cara lain dalam pembuatan array
$nama = ["Fadhil", "Muhammad", "Kyouya"];
var_dump($nama);

// Operasi Array
// untuk menampilkan index array ke-0
var_dump($nama[0]); 

// untuk mengubah isi data 
$nama[0] = "Mitsurugi";
var_dump($nama);

// untuk menghapus data
unset($nama[1]);
var_dump($nama);

// untuk menambahkan data pada array
$nama[] = "Guderian";
var_dump($nama);

// untuk menampilkan jumlah data pada array
var_dump(count($nama));

// map, maksudnya adalah kita mengubah array yang tadi key-nya adalah index, dirubah dengan menggunakan string
// jika dalam bahasa lain ini disebutnya adalah map, namun diphp kita bisa melakukannya di-array
$map1 = array(
    "id" => "mahasiswa-1",
    "nama" => "Fadhil Muhammad",
    "jurusan" => "teknik komputer",
    "alamat" => array(
        "kota" => "Bandung",
        "negara" => "Indonesia"
    )
); 
var_dump($map1); // untuk melihat datanya

var_dump($map1["nama"]); // untuk melihat datanya, kita tinggal merubah yang tadinya index menjadi key yang kita input
var_dump($map1["alamat"]["kota"]); // untuk melihat data array didalam array

$map2 = [
    "id" => "mahasiswa-2",
    "nama" => "Mitsurugi Kyouya",
    "jurusan" => "teknik komputer",
    "alamat" => [
        "kota" => "Osaka",
        "negara" => "Jepang",
    ]
];

var_dump($map2);
