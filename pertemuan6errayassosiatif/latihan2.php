<?php

// array assosiatif
// definisinya sama dengan array numerik, kecuali key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Nur Ihsan",
    "alamat" => "Bekasi",
    "jurusan" => "TIK",
    "hobi" => "Berenang ",
    "foto" => "mile.jpg"
    ],
    [
    "nama" => "Nur Ihsan",
    "alamat" => "Bekasi",
    "jurusan" => "TIK",
    "hobi" => "Berenang",
    "foto" => "mile.jpg"
    ],
    [
    "nama" => "Nur Ihsan",
    "alamat" => "Bekasi",
    "jurusan" => "TIK",
    "hobi" => "Berenang",
    "foto" => "mile.jpg"
    ],
    [
    "nama" => "Nur Ihsan",
    "alamat" => "Bekasi",
    "jurusan" => "TIK",
    "hobi" => "Berenang",
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

<?php foreach ($mahasiswa as $mhs) { ?>
<ul>
<li>
    <img src="img/<?php echo $mhs["foto"]; ?>">
</li>
<li> Nama : <?php echo $mhs ["nama"]; ?></li>
<li> Alamat : <?php echo $mhs ["alamat"]; ?></li>
<li>  Jurusan : <?php echo $mhs ["jurusan"]; ?></li>
<li> Hobi : <?php echo $mhs ["hobi"]; ?></li>
</ul>
<?php } ?>


</body>
</html>