<?php
echo "masukkan sisi :";
$sisi  = trim(fgets(STDIN));
for ($i=0; $i<=$sisi; $i++){

for ($a=0; $a<=$sisi; $a++) { 

if ($i+$a==$sisi || $i==$a) {

    echo "+";
} else {
    echo "_";
}


}
echo "\n";
//echo "<br>";

}

?>
