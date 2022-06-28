<?php

// perbedaan dari require & include adalah 
// jika requirenya tidak tertemui file yang dituju maka program akan error & program berhenti
// jika  include maka jika file tidak tertemui program akan memberi warning, namun program masih tetap berjalan
include "myFunction/myFunction.php";
include_once "myFunction/myFunction.php"; // contoh include 2 kali

echo ucapanHallo("Fadhil", "Muhammad");

// pastikan menyimpan include harus diatas, supaya program berjalan. jika kita panggil function terlebih dahulu lalu include
// maka program akan error, karena function tidak ditemukan

// include_once & require_once
// jika kita men-include / require program yang sama, maka program akan menjadi error.
// karena program yang sebelumnya telah dideklarasikan, namun kita tumpuk kembali, sehingga seolah-olah membuat ulang

