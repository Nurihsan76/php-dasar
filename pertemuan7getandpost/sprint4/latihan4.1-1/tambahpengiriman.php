<?php
require "function.php";
 
    if (isset($_GET['submit'])) {
        $tambah = new connectpdo;
        $tambah->pengiriman($_GET["kurir"], $_GET["pengirim"], $_GET["asal"], $_GET["tujuan"]);
    
    header("location: latihan4.1-1.php");
    exit;
    }
    
    
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah pengiriman</title>
</head>
<body>
<form action="" method="get">
    <label for="kurir">Masukkan kurir : </label>
    <input type="text" name="kurir" id="kurir" placeholder="isi kurir">
<br>
    <label for="pengirim">Masukkan pengirim : </label>
    <input type="text" name="pengirim" id="pengirim" placeholder="isi pengirim">
<br><label for="asal">Masukkan asal : </label>
    <input type="text" name="asal" id="asal" placeholder="isi asal">
<br>
    <label for="tujuan">Masukkan tujuan : </label>
    <input type="text" name="tujuan" id="tujuan" placeholder="isi tujuan">
<br>
    <button type = "submit" name = "submit">tambah</button>
    </form>
    

<br>

</body>
</html>