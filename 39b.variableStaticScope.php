<?php

function increment() {
    // default dari local scope, ialah hanya sebatas function saja, jadi disaat kita panggil maka programnya akan selesai
    // berbeda dengan static, meski programnya telah selesai namun valuenya masih bisa bertambah dan terus menerus 
    static $counter = 1; // static scope
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();