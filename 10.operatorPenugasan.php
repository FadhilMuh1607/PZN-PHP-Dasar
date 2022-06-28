<?php

$total = 0;

$monitor = 900000;
$kipasAngin = 100000;
$bracket = 300000;

// $total = $total + $monitor;
// $total = $total + $kipasAngin;
// $total = $total + $bracket;

// kita bisa menyingkatnya
$total += $monitor;
$total += $kipasAngin;
$total += $bracket;

var_dump($total);

$budget = 1000000;
$pembayaran = 0;

$perabotanlaptop = 900000;
$kipas = 100000;
$biayacair = 1000000;
$les = 100000;
$jajan = 150000;

$budget += $biayacair;
$pembayaran += $perabotanlaptop;
$pembayaran += $kipas;
$pembayaran += $les;
$pembayaran += $jajan;

var_dump($budget -= $pembayaran);
