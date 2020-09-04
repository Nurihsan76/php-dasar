<?php
echo "array $a =[ 5, 9, 6, 7, 9, 8, 10, 7, 8] <br>";
echo "<br>latihan1<br>";
echo "<br> mean <br>";
$a =[5, 9, 6, 7, 9, 8, 10, 7, 8];
$i = array_sum ($a);
$ai =$i/count($a);
echo "$ai <br>";
?>
<?php
echo "median <br>";
$a =[ 5, 9, 6, 7, 9, 8, 10, 7, 8];
sort($a);
echo  $a[count($a)/2];
echo "<br>";
?>
<?php
echo "modus <br>";
//Input Data via Sintaks
$a =[ 5, 9, 6, 7, 9, 8, 10, 7, 8];
for($i=0;$i<=9;$i++)
{ echo " $a[$i] <br>"; }
//Menghitung Count Masing-masing Data
for($j=0;$j<=9;$j++){
$c[$j]=0;

for($i=0;$i<=9;$i++){

if($a[$j]==$a[$i]){
$c[$j]=$c[$j]+1;
}
}
}
//Mencari Count Terbanyak
$indeks=0;$modus=0;
for ($i=0;$i<=9;$i++){

if($modus<$c[$i]){
$modus=$c[$i];

$indeks=$i;
}
}
//Menampilkan Count Terbanyak atau Modus
echo "Modus = $a[$indeks] ,<br>dengan frekuensi = $modus kali <br>";
?>
<?php
echo "<br>latihan2<br>";
echo "<br>three highest <br>";
$a =[5, 9, 6, 7, 9, 8, 10, 7, 8];
rsort($a);
echo $a[0] . "," . $a[1] . "," . $a[2] . "," . "<br>";
?>
<?php
echo "three lowest <br>";
$a =[5, 9, 6, 7, 9, 8, 10, 7, 8];
sort($a);
echo $a[0] . "," . $a[1] . "," . $a[2] . "<br>";
?>


