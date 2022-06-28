<?php

// setiap variable yang kita deklarasikan diluar function, ia adalah global scope
$nama = "Fadhil Muhammad"; // variable scope
// global scope bisa kita akses, selama bukan diakses difunction, jika kita akses difunction ia tidak akan bisa, dan program akan error
// defaultnya disaat kita membuat sebuah variable diglobal, ia akan tersave didalam variable globals, contoh sintaksnya
// $GLOBALS["nama"] = "Fadhil";
// var_dump($GLOBALS); kita bisa melihat hasilnya menggunakan var_dump()


function ucapanHallo (){
    global $nama; // global, memungkinkan kita menggunakan variable global kedalam function
    echo "$nama" . PHP_EOL; // error karena variable $nama berada didalam global scope bukan function scope
    echo "Hello {$GLOBALS["nama"]} " . PHP_EOL; // selain menggunakan global keyword, kita bisa gunakan demikian
}

ucapanHallo();