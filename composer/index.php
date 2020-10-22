<?php



use bangundatar\lingkaran;
use bangundatar\persegi;
use bangundatar\segitiga;
use Carbon\Carbon;


require_once "vendor/autoload.php";

// printf("Right now in jakarta is %s", Carbon::now('Asia/Jakarta'));  //implicit __toString()

// $howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;
// echo $howOldAmI;
// printf("Right now is %s", Carbon::now()->toDateTimeString());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko NurjaSanjaya</title>
</head>
<body>
<h1>Menghitung jumlah akhir</h1>
<h2>Persegi</h2>
    <form action="" method="post">
    
    <label for="sisi">masukkan jumlah : </label>
    <input type="text" name="sisi" id="sisi">
    <button type="submit" name="persegi">submit</button>
    </form>
<h2>Lingkaran</h2>
<form action="" method="post">
    
    <label for="jari">masukkan jari-jari : </label>
    <input type="text" name="jari" id="jari">
    <button type="submit" name="lingkaran">submit</button>
    </form>
<h2>Segitiga</h2>
<form action="" method="post">
    
    <label for="alas">masukkan alas : </label>
    <input type="text" name="alas" id="alas">
    <br>
    <label for="tinggi">masukkan tinggi : </label>
    <input type="text" name="tinggi" id="tinggi">
    <button type="submit" name="segitiga">submit</button>
    </form>
    <h2>============================================================================================================</h2>
<h2>Hasil : </h2>
    <?php
     if (isset($_POST['persegi'])){ 
    $persegi = new persegi; 
    echo $hasil = $persegi->luaspersegi($_POST['sisi']);
     } ?>

    <?php 
     if (isset($_POST['segitiga'])){
    $segitiga = new segitiga;
    echo $segitiga->luassegitiga($_POST['alas'],$_POST['tinggi']);
    } ?>
    <?php 
     if (isset($_POST['lingkaran'])){
    $lingkaran = new lingkaran;
    echo $lingkaran->luaslingkaran($_POST['jari']);
    }?>
    <br><br>
    <a href="index.php"><button>Refresh</button></a>
</body>
</html>
