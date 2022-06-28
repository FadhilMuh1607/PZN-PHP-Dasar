<?php

goto a;
echo "Hello world!" . PHP_EOL;

a: 
echo "Hello go to A" . PHP_EOL;

// goto dalam looping, secara otomatis ia akan menghentikan perulangan jika goto-nya berada diluar ruangan
$counter = 1;
while(true) {
    echo "Ini merupakan looping while ke-$counter". PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end;
    }
}

end : 
echo "Looping selesai" . PHP_EOL;