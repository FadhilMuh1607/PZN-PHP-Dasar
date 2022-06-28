<?php

$contohAnyonymousFunction = function (string $nama){
    echo "Hallo $nama" . PHP_EOL;
};

$contohAnyonymousFunction("Fadhil");
$contohAnyonymousFunction("Muhammad");

function ucapanSelamatTinggal(string $ngaran, $filter)
{
    $akhirNilai = $filter($ngaran);
    echo "Good Bye $akhirNilai" . PHP_EOL;
}

ucapanSelamatTinggal("Fadhil", function(string $ngaran): string{
    return strtoupper($ngaran);
});

$filterFunction = function($ngaran): string{
    return strtoupper($ngaran);
};

ucapanSelamatTinggal("Mitsurugi", $filterFunction);

$firstName = "Hafidz";
$lastName = "Muhammad";

$namaLengkap = function ()use ($firstName, $lastName){ //jika tidak menggunakan use maka akan error
    echo "Hallo $firstName $lastName" . PHP_EOL;
};
$namaLengkap();

$firstName = "Mitsurugi";
$lastName = "Kyouya";
$namaLengkap();