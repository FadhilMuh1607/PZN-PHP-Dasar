<?php

echo "Tipe data (Desimal) : ";
var_dump(1234); // bilangan basis 10

echo "Tipe data (Octal) : ";
var_dump(01234); // bilangan basis 8, dimulai menggunakan 0 dan maksimum 8 angka

echo "Tipe data (Hexadecimal) : ";
var_dump(0x1A); // bilangan basis 16, dimulai menggunakan 0x

echo "Tipe data (Binary) : ";
var_dump(0b10101010); // bilangan basis 2, dimulai dengan 0b

echo "Underscore in Number : ";
var_dump(2_752_839_173_091); // ini bisa kita manfaatkan sebagai pemisah, meski disaat dijalankan underscore ini tidak akan diproses

// Bilangan Tipe data Float
echo "Bilangan Float : ";
var_dump(1.234); // untuk bilangan pecahan kita bisa menggunakan titik

echo "Floating Point dengan E notation : (1,6 X 1000) : ";
var_dump(1.6e3);

echo "Floating Point dengan E minus notation : (1,6 X 0.001) : ";
var_dump(1.6e-3);

echo "Underscore di Floating Point";
var_dump(8_4793.274);

// integer Overflow
echo "Integer Overflow 32 bit : ";
var_dump(2147483648); // untuk 32 bit, ditambah 1

echo "Interger Overflow 64 bit : ";
var_dump(9223372036854775808); // untuk 64 bit, ditambah 1