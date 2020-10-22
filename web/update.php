<?php
require 'function.php';

if (isset($_POST["submit"])){
    $conn = new connectpdo;
    $conn->update($_GET['id'], $_POST['judul'], $_POST['doa'], $_POST['artinya'], $_POST['tag']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
<h1>halaman tambah doa</h1>
<form action="" method="post">
    <label for="judul">masukkan judul doa : </label>
    <input type="text" name="judul" id="judul">
    <br><br>
    kategori :
    <select name="tag" id="tag">
        <option value="1">dalam rumah</option>
        <option value="2">luar rumah</option>
    </select>
    <br><br>
    <label for="doa">masukkan doa : </label>
    <br>
    <textarea type="text" name="doa" id="doa" ></textarea>
    <br><br>
    <label for="artinya">masukkan artinya : </label>
    <br>
    <textarea type="text" name="artinya" id="artinya"></textarea>
    <br><br>
    <button type="submit" name="submit">tambah</button>
    </form>
</body>
</html>