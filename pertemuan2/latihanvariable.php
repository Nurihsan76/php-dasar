<?php
echo "panjang :";
$panjang  = trim(fgets(STDIN));
echo "lebar :";
$lebar  = trim(fgets(STDIN));

$luas = $panjang*$lebar;
echo "$luas" . "\n";
