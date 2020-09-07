<?php
echo "latihan4<br>";
echo "<br>luas trapesium <br>";
function luas(float $setengah, int $sisiatas, int $sisibawah, int $tinggi) : float {
return $setengah * ($sisiatas + $sisibawah) * $tinggi;
}
echo luas(0.5, 5, 7, 4);
echo "<br>";
?>

