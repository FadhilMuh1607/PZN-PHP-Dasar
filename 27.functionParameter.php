<?php

// function namaorang($nama = "default")
function namaorang($firstName, $lastName = "")
{
    echo "Perkenalkan, nama saya adalah $firstName $lastName" . PHP_EOL;
}


namaorang("Lihdaf");
namaorang("Nasni");
namaorang("Fadhil", "Muhammad");


function pertambahan(int $first, int $last)
{
    $total = $first + $last;
    echo "Total dari $first + $last adalah $total" . PHP_EOL;
}

pertambahan(100, "100");
pertambahan(100, 100);
pertambahan("50", "50");
pertambahan(true, false);

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}


$values = [32,23,42,123,354];
sumAll(1,2,3,4,5);
sumAll(...$values);