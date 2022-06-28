<?php

function factorial (int $value):int {
    $total = 1;
    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorial(5));
var_dump(1 * 2 * 3 * 4 * 5);

function factorialRecursive(int $nilai): int {
    if ($nilai == 1){
        return 1;
    } else {
        return $nilai * factorialRecursive($nilai - 1);
    }
}

var_dump(factorialRecursive(7));
var_dump(1 * 2 * 3 * 4 * 5 * 6 * 7);


/* 
Default dari pemanggilan factorial recursive
factorialRecursive(7) * factorialRecursive(6) * factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) *  factorialRecursive(2) * factorialRecursive(1);
 */


function ujicobaStackRecursive(int $angka){
    if($angka == 0){
        echo "Loop telah selesai " . PHP_EOL;
    } else {
        echo "Looping ke-$angka" . PHP_EOL;
        ujicobaStackRecursive($angka - 1);
    }
}

ujicobaStackRecursive(3000000);
