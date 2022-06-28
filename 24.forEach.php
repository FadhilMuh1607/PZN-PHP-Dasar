<?php

$nama = ["Fadhil", "Muhammad", "Mitsurugi"];

// mengakses array menggunakan penggunaan looping for
// for ($i = 0; $i < count($nama); $i++) {
//     echo "Hello data ke-$i = $nama[$i]" . PHP_EOL;
// }

// menggunakan foreach
foreach($nama as $ngaran){
    echo "Data $ngaran" . PHP_EOL;
}

// menggunakan foreach tetapi menggunakan index
foreach($nama as $index => $ngaran){
    echo "Data index ke-$index = $ngaran" . PHP_EOL;
}

// menggunakan foreach namun dengan kasus key, bukan index
$user = [
    "first_name" => "Fadhil",
    "last_name" => "Muhammad",
    "nama_panggilan" => "Kyouya"
];

foreach($user as $key => $nilai) {
    echo "$nilai : $key" . PHP_EOL;
}
