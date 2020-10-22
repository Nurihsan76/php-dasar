<?php

if (!$_COOKIE['nama']) {
    
   header('location: logincookie.php');
    exit;
}


//    echo $_COOKIE['nama'];

   if (isset($_POST["submit"])) {

    setcookie('nama', ' ', time()-60, '/');

   header('location: logincookie.php');
   exit;


   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko</title>
</head>
<body>
    <h1>welcome</h1>
    <form action="" method="post">
    <button type="submit" name="submit">keluar</button>
    </form>
</body>
</html>