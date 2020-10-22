<?php
require "function.php";
 
    if (isset($_POST['submit'])) {
    $barang = $_POST["barang"];
    $harga = $_POST["harga"];
    $query = "INSERT INTO toko (barang, harga) VALUES (?, ?)";
    $tambah = $connect->prepare($query);
    $tambah->execute([$barang, $harga]);
    }
    
    elseif (isset($_GET['submit'])) {
        $barang = $_GET["kurir"];
        $harga = $_GET["pengirim"];
        $asal = $_GET["asal"];
        $tujuan = $_GET["tujuan"];
        $query = "INSERT INTO toko (kurir, pengirim, asal, tujuan) VALUES (?, ?, ?, ?)";
        $tambah = $connect->prepare($query);
        $tambah->execute([$barang, $harga, $asal, $tujuan]);
        } 
    
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah barang</title>
</head>
<body>
<form action="" method="post">
    <label for="barang">Masukkan nama barang : </label>
    <input type="text" name="barang" id="barang" placeholder="isi barang">
<br>
    <label for="harga">Masukkan harga barang : </label>
    <input type="text" name="harga" id="harga" placeholder="isi harga">
<br>
    <button type = "submit" name = "submit">tambah</button>
    </form>
    

<br>
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