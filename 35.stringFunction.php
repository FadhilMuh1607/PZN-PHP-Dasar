<?php

// join berfungsi untuk mengubah array menjadi string
// var_dump(join([10, 11, 12, 13, 14, 15, ","])); // hasilnya ia akan menyatu. maka separator perlu diawal
var_dump(join(",", [10, 11, 12, 13, 14, 15]));

// explode berfungsi untuk memecah stringnya menjadi array
// var_dump(explode(" ", "Fadhil,Muhammad,Kyouya")); // ia akan memecahnya menjadi string sesuai dengan separatornya, jika separatornya spasi maka perlu spasi
var_dump(explode(",", "Fadhil,Muhammad"));

//strtolower berfungsi untuk mengecilkan huruf
var_dump(strtolower("FADHIL MUHAMMAD"));

//strtoupper berfungsi untuk membesarkan huruf
var_dump(strtoupper("tsurugi kyouya"));

// trim untuk berfungsi untuk menghapus spasi didepan/belakang atau kiri/kanan
var_dump(trim("                 Fadhil                  Muhammad"));
// ia akan menghapus bagian depan dengan belakang dari spasi, untuk bagian tengah ia tidak bisa 

// substr berfungsi untuk memotong/mengambil data
var_dump(substr("Mitsurugi Kyouya",2,7)); // parameter setelah function, untuk yang pertama ia adalah data awal, sedangkan terakhir adalah data terakhir
// untuk penggunaan dari parameter terakhir, hitungnya mulai setelah dari parameter ke-2