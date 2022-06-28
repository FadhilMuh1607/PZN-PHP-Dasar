<?php

function ucapanHallo(string $nama, callable $filter)
{
    $nilaiAkhir = call_user_func($filter, $nama);
    // $nilaiAkhir = $filter($nama); // konsepnya hampir sama, cuman berbeda penulisan
    echo "Hallo $nilaiAkhir" . PHP_EOL;
}

ucapanHallo("Fadhil", "strtoupper");
ucapanHallo("Fadhil", "strtolower");
ucapanHallo("Fadhil", function(string $nama):string {
    return strtoupper($nama);
});
ucapanHallo("Fadhil", fn($nama) => strtolower($nama));