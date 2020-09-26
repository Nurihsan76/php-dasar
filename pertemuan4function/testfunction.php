<?php
echo "===================" . "\n";
echo "| persegi panjang |" . "\n";
echo "===================" . "\n";


//function salam($waktu, $nama){
//echo "\n" . "selamat " . $waktu . ", " . $nama . "\n";
//}
//salam ("pagi", "ihsan");

echo "1.luas" . "\n" . "2.keliling" . "\n";
echo "mau menghitung yang mana ? :";
$pilihan = trim(fgets(STDIN));


function luas($pj, $lb){
return $pj*$lb;
}

function keliling($pj, $lb){
return ($pj+$lb)*2;
}

if ($pilihan == 1){
echo "panjang : ";
$pj = trim(fgets(STDIN));
echo "lebar : ";
$lb = trim(fgets(STDIN));
echo "luas : " . luas($pj, $lb) . "\n";
} elseif ($pilihan == 2){
echo "panjang : ";
$pj = trim(fgets(STDIN));
echo "lebar : ";
$lb = trim(fgets(STDIN));
echo "kililing : " . keliling($pj, $lb) . "\n";
} else {
echo "pilihan tidak tersedia" . "\n";
}



?>
