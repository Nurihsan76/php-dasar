<?php
// 
// variabel yg dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe yang berbeda
// pasangan antara key dan velue
// key-ny adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array ("senin", "selasa", "rabu");
// cara baru
$bulan = ["april", "mei", "juni"];
$arri = [123, "tulisan", true];

// menampilkan array
// var_dump() /print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// echo $arri[0]

// menambahkan elemen baru pada aray
$hari [] = "kamis";
$hari [] = "jumat";
echo "<br>";
var_dump ($hari);









?>