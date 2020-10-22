<?php
session_start();

if ($_SESSION["login"]) {
    header('location: web.php');
}

require 'function.php';


if (isset($_POST['submit'])) {
    $masuk = new connectpdo;
    $masuk->login($_POST["username"], $_POST["password"]);

    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>masuk</title>
</head>
<body>
<h1>halaman login</h1>
    <form action="" method="post">
    <label for="username">username : </label>
    <input type="text" name="username" id="username">
    <br><br>
    <label for="password">password : </label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type = "submit" name = "submit">masuk</button>
        </form>
</body>
</html>