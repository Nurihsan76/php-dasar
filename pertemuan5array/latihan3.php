<?php
$mahasiswa = [
    ["Nur Ihsan", "Bekasi", "TIK", "Email"],
    ["Nur Ihsan", "Bekasi", "TIK", "Email"],
    ["Nur Ihsan", "Bekasi", "TIK", "Email"],
    ["Nur Ihsan", "Bekasi", "TIK", "Email"]
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
<li> Nama : <?php echo $mhs [0] ?></li>
<li> Asal : <?php echo $mhs [1] ?></li>
<li>  Jurusan : <?php echo $mhs [2] ?></li>
<li> Email : <?php echo $mhs [3] ?></li>
</ul>
<?php } ?>


</body>
</html>