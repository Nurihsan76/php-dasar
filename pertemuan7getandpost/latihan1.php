<?php

// $_GET

$mahasiswa = [
    [
    "nama" => "Nur Ihsan",
    "alamat" => "Bekasi",
    "jurusan" => "TIK",
    "hobi" => "Berenang ",
    "foto" => "mile.jpg"
    ],
    [
    "nama" => "Nur",
    "alamat" => "Ckr",
    "jurusan" => "Mtk",
    "hobi" => "renang",
    "foto" => "mile.jpg"
    ],
    [
    "nama" => "Ihsan",
    "alamat" => "Cbr",
    "jurusan" => "IT",
    "hobi" => "sepedaan",
    "foto" => "mile.jpg"
    ],
    [
    "nama" => "Nurjasanjaya",
    "alamat" => "Jogja",
    "jurusan" => "Ipa",
    "hobi" => "Ibadah",
    "foto" => "mile.jpg"
    ]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
<h1>daftar mahasiswa</h1>

<ul>

<?php foreach ($mahasiswa as $mhs) { ?>


<li>
<a href="latihan2.php?nama=<?php echo $mhs["nama"];?>&alamat=<?php echo $mhs["alamat"];?>&jurusan=<?php echo $mhs["jurusan"];?>&hobi=<?php echo $mhs["hobi"];?>&foto=<?php echo $mhs["foto"];?>"> Nama : <?php echo $mhs ["nama"];?></a>
</li>


<?php } ?>

</ul>

</body>
</html>
