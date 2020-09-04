<?php
// dari internet
echo "<br> latihan1 <br><br>";

for ($a = 1; $a <= 5; $a++) {

for ($i = 1; $i <= $a; $i++){

echo "$i ";

}

echo "<br>";
 
}

?>
<?php
// dari internet
echo "<br> latihan2 <br><br>";

for( $a=10;$a>0;$a--){
for($i=1; $i<=$a; $i++){

echo "_";


}
for($a1=10;$a1>$a;$a1--){
echo"x";
}

echo"<br>";
}


?>
<?php
echo "<br> latihan3 <br><br>";

for ($i=0; $i<9; $i++){
for ($a=0; $a<9; $a++){

echo "($i,$a)";

}

echo "<br>";

}

?>
<?php
echo "<br> latihan4 <br><br>";

for ($i=0; $i<9; $i++){

for ($a=0; $a<9; $a++) {

if ($i %2 == 0) {
  echo "+";
} else {
  echo " - ";
}

}
echo "<br>";
}
?>
<?php
echo "<br> latihan5 <br><br>";

for ($i=0; $i<9; $i++){

for ($a=0; $a<9; $a++) {

if ($a %2 == 0) {
  echo "+";
} else {
  echo " - ";
}

}
echo "<br>";
}
?>
<?php
echo "<br> latihan6 <br><br>";

for ($i=0; $i<9; $i++){

for ($a=0; $a<9; $a++) { 

if ($i==$a) {
    echo "+";
} else {
    echo " - ";
}

}

echo "<br>";

}

?>
<?php
echo "<br> latihan7 <br><br>";

for ($i=0; $i<9; $i++){

for ($a=0; $a<9; $a++) { 
   
if ($i+$a==8) {
    echo "+";
} else {
    echo " - ";

}

}

echo "<br>";

}

?>
<?php
echo "<br> latihan8 <br><br>";

for ($i=0; $i<9; $i++){

for ($a=0; $a<9; $a++) { 

if ($i+$a==8 || $i==$a) {

    echo "+";
} else {
    echo " - ";
}


}

echo "<br>";

}

?>
<?php
echo "<br> latihan9 <br><br>";

for ($i=0; $i<9; $i++){

for ($a=0; $a<9; $a++) { 
   
if ($a<=$i) {
    echo "+";
} else {
    echo " - ";

}

}

echo "<br>";

}

?>
<?php
echo "<br> latihan9 <br><br>";

for ($i=0; $i<9; $i++) {

for ($a=0; $a<9; $a++) {

if ($i+$a>=8){

echo "+";

} else {
    echo " - ";
}
   

}

echo "<br>";

}

?>