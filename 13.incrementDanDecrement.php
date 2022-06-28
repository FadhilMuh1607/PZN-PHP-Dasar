<?php

$a = 16;

// $a++;
// $a++;
// ini konsepnya seperti $a = a + 1;

// misal kita simpan data tersebut di variable b
$b = $a++;
// post decrement, konpsenya yaitu kita simpan terlebih dahulu variable a ke b, lalu tambahkan maka hasilnya akan sama dengan variable awal a
// $b = $a;
// $a = $a + 1;

// $b = ++$a;
// jika pre decrement, konsepnya hampir sama dengan post decrement namun ia disimpan untuk penjumlahannya langsung diawal
// $a = $a + 1;
// $b = $a;


var_dump($a);
var_dump($b);