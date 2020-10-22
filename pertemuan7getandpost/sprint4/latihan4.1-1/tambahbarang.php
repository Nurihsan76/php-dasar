<?php
require "function.php";

if (isset($_POST['submit'])) {
    $tambah = new connectpdo;
    $tambah->tambah($_POST["barang"], $_POST["harga"]);    
    
    header("location: latihan4.1-1.php");
    exit;
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

</body>
</html>