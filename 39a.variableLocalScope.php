<?php

function createNama(){
    // setiap variable yang kita deklarasikan didalam function, ia bernama local scope
    // local scope ini akan berjalan didalam function itu sendiri, tidak akan bisa kita akses ke global scope
    $nama = "Fadhil"; // local scope
}

createNama();
echo $nama . PHP_EOL;

