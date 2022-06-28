<?php

// for(; ;){
//     echo "Hello For loop" . PHP_EOL;
// } // sebenarnya jika kondisi diatas kita kosongkan itu bisa, defaultnya adalah nilai true semua
// dan yang terjadi adalah infinite loop

// cara ke-2
// $counter = 1;
// for(; $counter <= 10;){
//     echo "Hello For loop counter ke-{'$counter'}" . PHP_EOL;
//     $counter++;
// }

// cara ke-3
for($counter = 1; $counter <= 10; $counter++){
    echo "Hello For loop counter ke-{'$counter'}" . PHP_EOL;
}

// kita juga bisa menjadikannya decrement
for($counter = 10; $counter >= 1; $counter--){
    echo "Hello For loop counter ke-{'$counter'}" . PHP_EOL;
}

// menggunakan sintaks alternativ
for($counter = 1; $counter <= 10; $counter++) :
    echo "Hello For loop counter ke-{'$counter'}" . PHP_EOL;
endfor;