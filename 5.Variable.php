<?php
// diphp kita bisa merubah variable, tidak seperti java/C yang tidak bisa kita rubah
$nama = true; // disini true tidak terproses, karena ditimpa/diganti oleh string dengan nama saya
$nama = "Fadhil Muhammad";
$umur = 19;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

// Variable  variables, jadi kita membuat tipe data dengan namanya berasal dari value dari isi tipe data yang dimaksud
$contoh = "Mitsurugi";
$$contoh = "Kyouya"; 
// ini sama saja dengan kita membuat varialbe $Mitsurugi = "Kyouya";

echo "Nama : ";
echo $contoh;
echo "\n";

echo "Mitsurugi ";
echo $$contoh; // atau kita juga bisa menuliskan $$contoh
echo "\n";
