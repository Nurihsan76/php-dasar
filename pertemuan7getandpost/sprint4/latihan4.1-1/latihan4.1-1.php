<?php
 require "function.php";

 $barang = new connectpdo();
$data = $barang->barang("toko");
$kurir = $barang->barang("pengiriman");
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

<a href="tambahbarang.php">tambah barang</a>

<br><br>
<a href="tambahpengiriman.php">tambah pengiriman</a>

<br><br>


    <table border = "1" cellpadding = "10" cellspacing = "0">
    
    <tr>
    <th>id</th>
    <th>aksi</th>
    <th>nama barang</th>
    <th>harga barang</th>
    </tr>
<?php $i=1 ?>
 <?php foreach ($data as $key) { ?>

    <tr>
    <td><?=$i?></td>
    <th><a href="">ubah</a> | <a href="hapus.php?id=<?=$key["id"]?>">hapus</a></th>
    <td><?=$key["barang"]?></td>
    <td><?=$key["harga"]?></td>
    </tr>

 <?php $i++ ?>
 <?php } ?>
    </table>
    <table border = "1" cellpadding = "10" cellspacing = "0">
    
    <tr>
    <th>id</th>
    <th>aksi</th>
    <th>nama kurir</th>
    <th>harga pengiriman</th>
    <th>nama asal</th>
    <th>harga tujuan</th>
    </tr>

 <?php foreach ($kurir as $key) { ?>

    <tr>
    <td><?=$key["id"]?></td>
    <th><a href="">ubah</a> | <a href="">hapus</a></th>
    <td><?=$key["kurir"]?></td>
    <td><?=$key["pengirim"]?></td>
    <td><?=$key["asal"]?></td>
    <td><?=$key["tujuan"]?></td>
    </tr>

 <?php } ?>

    </table>
</body>
</html>