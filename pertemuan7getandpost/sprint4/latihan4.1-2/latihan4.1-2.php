<?php
session_start();

if (!$_SESSION["login"]) {
    header("location: login.php");
    exit;
}

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit;
}
require "function.php";

 $barang = new connectpdo();
$data = $barang->barang();
// $kurir = $barang->barang("pengiriman");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko</title>
</head>
<body>

<h1>TOKO NURJA SANJAYA</h1>


<a href="tambahorderbarang.php"><button>tambah barang</button></a>

<br><br>
<form action="" method="post">
<button type="submit" name="logout">log out</button>
</form>
<br>


    <table border = "1" cellpadding = "10" cellspacing = "0">
    
    <tr>
    <th>id</th>
    <th>aksi</th>
    <th>nama barang</th>
    <th>harga barang</th>
    <th>kurir</th>
    <th>pengiriman</th>
    <th>asal</th>
    <th>tujuan</th>
    </tr>
<?php $i=1 ?>
 <?php foreach ($data as $key) { ?>

    <tr>
    <td><?=$i?></td>
    <th><a href="ubah.php?id=<?=$key["id"]?>">ubah</a> | <a href="hapus.php?id=<?=$key["id"]?>">hapus</a></th>
    <td><?=$key["barang"]?></td>
    <td><?=$key["harga"]?></td>
    <td><?=$key["kurir"]?></td>
    <td><?=$key["pengirim"]?></td>
    <td><?=$key["asal"]?></td>
    <td><?=$key["tujuan"]?></td>
    </tr>

 <?php $i++ ?>
 <?php } ?>


    </table>
</body>
</html>
