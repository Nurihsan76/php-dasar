<?php
session_start();

if (!$_SESSION["login"]) {
    header("location: login.php");
    exit;
}

require "function.php";
    if (isset($_POST['submit'])) {
        
        $ubah = new connectpdo;
        $ubah->ubah($_POST["barang"], $_POST["harga"],$_POST["kurir"], $_POST["pengirim"], $_POST["asal"], $_POST["tujuan"], $_GET["id"]);
        
        header("location: latihan4.1-2.php");
        exit;
}    
     
    
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah order barang</title>
</head>
<body>
<form action="" method="post">
    <label for="barang">Masukkan nama barang : </label>
    <input type="text" name="barang" id="barang" placeholder="isi barang">
<br>
    <label for="harga">Masukkan harga barang : </label>
    <input type="text" name="harga" id="harga" placeholder="isi harga">
<br><label for="kurir">Masukkan kurir : </label>
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
    
    <button type = "submit" name = "submit">ubah</button>
    </form>
    



</body>
</html>
