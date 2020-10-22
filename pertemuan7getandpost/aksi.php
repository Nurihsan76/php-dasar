<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
</table>
</body>
</html>
    

