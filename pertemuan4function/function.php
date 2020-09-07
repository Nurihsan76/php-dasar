<?php
function salam($nama = "nur ihsan", $waktu = "datang") {
    return "selamat $nama, $waktu";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <h1><?php echo salam("pagi")?></h1>
</body>
</html>