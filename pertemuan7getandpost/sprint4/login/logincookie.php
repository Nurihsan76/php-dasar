<?php

if ($_COOKIE) {
    
    header ("location: profilcookie.php");
    exit;

}

if (isset($_POST["submit"])) {
    
setcookie('nama', true, time()+60, '/');    

    header ("location: profilcookie.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<form action="" method="post">
    <label for="username">Masukkan username : </label>
    <input type="text" name="username" id="username" placeholder="isi username">
<br>
    <label for="password">Masukkan password : </label>
    <input type="password" name="password" id="password" placeholder="isi password">
<br>
    <button type = "submit" name = "submit">masuk</button>
    </form>
    
<br>

</body>
</html>