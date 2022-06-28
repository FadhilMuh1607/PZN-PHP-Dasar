<?php

// jika menggunakan for loop
// for($counter = 1; $counter <= 10; $counter++){
//     echo "Hello For loop counter ke-{'$counter'}" . PHP_EOL;
// }

// menggunakan while, bedanya didalam kurung terdapat kondisi, untuk init statement dan post statementnya berada diluar 
$counter = 1;
while($counter <= 10){
    echo "Hello while loop counter ke-$counter" . PHP_EOL;
    $counter++; 
}

// Alternative sintaks
$counter = 1;
while($counter <= 10):
    echo "Hello while loop counter ke-$counter" . PHP_EOL;
    $counter++; 
endwhile;


