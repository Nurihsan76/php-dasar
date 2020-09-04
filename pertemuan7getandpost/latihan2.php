<?php

//cek apakah tidak ada data di $_GIT
if(
!isset($_GET["nama"]) ||
!isset($_GET["alamat"]) ||
!isset($_GET["jurusan"]) ||
!isset($_GET["hobi"]) ||
!isset($_GET["gambar"])) {
//redirect
header("Location: latihan1.php");
exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail mahasiswa</title>
</head>
<body>
<h1>Detail Mahasiswa</h1>

<ul>
<li>
    <img src="img/<?php echo $_GET["foto"];?>">
</li>
<li><?php echo $_GET["nama"];?> </li>
<li><?php echo $_GET["alamat"];?></li>
<li><?php echo $_GET["jurusan"];?></li>
<li><?php echo $_GET["hobi"];?></li>
</ul>



</body>
</html>
