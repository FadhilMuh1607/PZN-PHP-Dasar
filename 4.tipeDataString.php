<?php

// String bisa juga kita kosongkan
echo "Nama : ";
echo "Fadhil Muhammad";
//echo '\n'; //kita tidak bisa menambahkkan escape esquence dengan menggunakan petik satu, hannya berlaku menggunakan petik 2
echo "\n";

echo "Nama : ";
echo "Fadhil\t Muhammad\t Kyouya\n";

// Heredoc, yakni fitur php untuk menulis teks panjang, ini lebih bagus dibanding menulis panjang menggunakan petik dua
echo <<< heredoc
Selamat belajar PHP dasar
sekarang kita sedang belajar tipe data string
ini adalah cara ke-tiga membuat string 
yaitu dengan cara menggunakan heredoc\n

heredoc;

// nowdoc, hampir sama dengan heredoc, cuman ia konsepnya hampir sama dengan petik satu, ia juga tidak bisa melakukan parsing variable dan juga escape esquence, seperti contoh \n dibawah
echo <<< 'nowdoc'
Selamat belajar PHP dasar
sekarang kita sedang belajar tipe data string
ini adalah cara ke-empat membuat string 
yaitu dengan cara menggunakan nowdoc \n

nowdoc;










