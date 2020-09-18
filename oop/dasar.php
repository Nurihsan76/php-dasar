<?php

//function loop(){
//return "(y/n)", $pilih = trim(fgets(STDIN));
//}


echo "(y/n)";
$pilihan = trim(fgets(STDIN));

for ($i=true; $i>=$pilihan; $i++)

if ($pilihan == 'y'){
echo "(y/n)";
$pilihan = trim(fgets(STDIN));

}elseif($pilihan == 'n'){
echo "thx". "\n";
$i=false;
}else{
    echo "lol";
    $i=false;
}
// function numberDivision(int $x, int $y): float
// {
//     if ($y <= 0) {        
//         throw new Exception('Pembagi tidak boleh minus '."\n");
//     }

//     $quotient = $x / $y;
//     return $quotient;
// }

// echo "masukkan x : ";
// $x = trim(fgets(STDIN));
// echo "masukkan y : ";
// $y = trim(fgets(STDIN));


// try {
//     $result = numberDivision($x, $y);
//     echo "$x * $y = " . $result . "\n";
// } catch (Exception $e) {
//     echo "Error pada ".$e->getfile()." baris ke : ". $e->getLine()."\n";
//     echo $e->getMessage();
// }

// <?php
// class BangunDatar{
// public  $jari,
//         $diagonal1,
//         $diagonal2, 
//         $tinggi;

// //lingkaran
// public function lingkaran() {
// return 3.14 * $jari * $jari;
// }

// //trapesium

// public static function trapesium() {
// return 0.5 * (self::$diagonal1 + self::$diagonal2) * self::$tinggi;
// }




// } 

// echo "1. lingkaran : "." "."2. trapesium"."\n";
// echo "luas bangun datar mana yang ingin dihitung : ";
// $pilihan = trim(fgets(STDIN));

// if ($pilihan == 1){
// echo "masukan jari : ";
// self::$jari = trim(fgets(STDIN));
// echo "luas lingkaran : ";
// echo BangunDatar::lingkaran();
// }elseif($pilihan == 2){
// echo "masukan diagonal1 : ";
// $diagonal1 = trim(fgets(STDIN));
// echo "masukan diagonal2 : ";
// $diagonal2 = trim(fgets(STDIN));
// echo "masukan tinggi : ";
// $tinggi = trim(fgets(STDIN));
// echo "luas trapesium : ";
// echo BangunDatar::trapesium();
// echo "\n";
// }else {
// echo "pilihan tidak tersedia"."\n";
// }
// ?>