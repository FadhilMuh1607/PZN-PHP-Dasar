<?php

// Break, fungsinya untuk menghentikan seluruh pengulangan
$counter = 1;
while(true){
    echo "Hello while loop counter ke-$counter" . PHP_EOL;
    $counter++;  // defaultnya ia akan melakukan infinite loop, karena kondisi bernilai true

    if ($counter > 10) {
        break; // disaat kita melihat outputnya maka ia akan berhenti di looping 10, sesuai dengan breaknya, meski ia inifinite loop
    }
}

