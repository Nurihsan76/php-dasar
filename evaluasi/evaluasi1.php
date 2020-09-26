<?php
//echo "latihan1" . "\n";
//
//echo "masukkan sisi : ";
//$jumlah = trim(fgets(STDIN));
//
//for ($x = 0; $x<$jumlah; $x++) {
//for ($y = 0; $y<$jumlah; $y++) {
//
//if ($y %2 == 0){
//echo "+";
//} else {
//echo "_";
//}
//
//}
//echo "\n";
//}
//
//echo "\n";
//
//for ($x = 0; $x<$jumlah; $x++) {
//for ($y = 0; $y<$jumlah; $y++) {
//
//if ($x %2 == 0){
//echo "+";
//} else {
//echo "_";
//}
//
//}
//echo "\n";
//}
//
//echo "\n";
//
echo "latihan2" . "\n";
//echo "ingin memasukkan berapa angka : ";
//$jumlah = trim(fgets(STDIN));
//for ($i=1; $i<=$jumlah; $i++){
//echo "angka ke - " . $i . " : ";
//$angka[] = trim(fgets(STDIN));
//}
//foreach ($angka as $a){
//}

$a = 5956560159466056;

$array = explode ("0", $a);

foreach ($array as $k => $v){
$split[] = str_split ($array[$k]);
sort ($split[$k]);
}

$masuk = array_merge(...$split);

echo "hasil : ";
foreach ($masuk as $msk => $m){
echo $m;
}
echo "\n";

//echo "latihan3" . "\n";
//echo "ingin memasukkan berapa data : ";
//
//$jumlah = trim(fgets(STDIN));
//for ($i = 1; $i<=$jumlah; $i++){
//
//echo "\n";
//
//echo "data ke - " . $i . " : ";
//
//echo "\n";
//echo "\n";
//
//echo "masukkan nama : ";
//$data["nama"] = trim(fgets(STDIN));
//echo "masukkan nik : ";
//$data ["nik"] = trim(fgets(STDIN));
//echo "masukkan jurusan : ";
//$data ["jurusan"] = trim(fgets(STDIN));
//echo "masukkan divisi : ";
//$data["divisi"] = trim(fgets(STDIN));
//echo "masukkan usia : ";
//$data ["usia"] = trim(fgets(STDIN));
//$datasantri[] = $data; 
//
//echo "\n";
//
//}
//
//echo "santri dengan divisi Backend : ";
//foreach ($datasantri as $k){
//if ($k["divisi"] == "Backend"){
//echo $k["nama"] . ", ";
//}
//}
//
//echo "\n";
//
//echo "santri dengan umur kurang dari 25 : ";
//foreach ($datasantri as $k){
//if ($k["usia"] < 25){
//echo $k["nama"] . ", ";
//}
//}
//
//echo "\n";
//
//echo "santri termuda : ";
//foreach ($datasantri as $k){
//$umur[] = $k["usia"];
//}
//    
//array_multisort ($umur, SORT_DESC, $datasantri);
//
//
//foreach ($datasantri as $k){
//}
//
//echo $k["nama"] . ", ";
//
//echo "\n";
//
//
?>
