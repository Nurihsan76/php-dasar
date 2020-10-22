<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post and get</title>
</head>
<body>

    <form action="" method="get">
    <label for="barang">Masukkan nama barang : </label>
    <input type="text" name="barang" id="barang" placeholder="isi barang">
<br>
    <label for="harga">Masukkan harga barang : </label>
    <input type="text" name="harga" id="harga" placeholder="isi harga">
<br>
    <input type="submit" name="submit" value="kirim">
    </form>
<br>    
<table border = "1" cellpadding = "10" cellspacing = "0">
    
    <tr>
    <th>nama barang</th>
    <th>harga barang</th>
    </tr>
    
<?php
    if (isset($_GET['submit'])) { ?>

 
        <tr>
        <td><?=$_GET["barang"]?></td>
        <td><?=$_GET["harga"]?></td>
        </tr>
    
    <?php } ?>


    <form action="" method="post">
    <label for="barang">Masukkan nama barang : </label>
    <input type="text" name="barang" id="barang" placeholder="isi barang">
<br>
    <label for="harga">Masukkan harga barang : </label>
    <input type="text" name="harga" id="harga" placeholder="isi harga">
<br>
    <input type="submit" name="submit" value="kirim">
    </form>
<br>    
<table border = "1" cellpadding = "10" cellspacing = "0">
    >
    <tr>
    <th>nama barang</th>
    <th>harga barang</th>
    </tr>
</body>
</html>