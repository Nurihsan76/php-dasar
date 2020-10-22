<?php

require 'function.php';


if (isset($_POST['submit'])) {
$daftar = new connectpdo;
$daftar->register($_POST["username"], $_POST["password"], $_POST["password2"]);
// header("location: login.php");
// exit;
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<h1>halaman register</h1>
    <form action="" method="post">
    <label for="username">username : </label>
    <input type="text" name="username" id="username">
    <br><br>
    <label for="password">password : </label>
    <input type="password" name="password" id="password">
    <br><br>
    <label for="password2">konfirmasi : </label>
    <input type="password" name="password2" id="password2">
    <br><br>
    <button type = "submit" name = "submit">daftar</button>
        </form>
</body>
</html>