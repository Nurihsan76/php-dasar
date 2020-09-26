<?php
//echo "Mau input Berapa ? ";
//$jumlah = trim(fgets(STDIN));
//
//for ($i = 1; $i <= $jumlah; $i++) {
//    echo "Masukkan Angka ke $i : ";
//    $hasil_input[] = trim(fgets(STDIN));
//}
//
//function pisahAngka($hasil_input)
//{
//
//
//    foreach ($hasil_input as $x) {
//        if ($x == 0) {
//            asort($hasil_input);
//            array_shift($hasil_input);
//        }
//    }
//
//    return $hasil_input;
//    // print_r($hasil_input);
//}
// array_filter($hasil_input, "pisahAngka");
//$hasil = pisahAngka($hasil_input);
//
//print_r($hasil);


$ar1 = ["nama" => "mile"];
$ar2 = ["nik" => "f001"];
$result = array_merge($ar1, $ar2);
foreach ($result as $s => $v){
echo "\n" . $s . "=>" . $v . "\n";
//print_r ($result);

}



?>
