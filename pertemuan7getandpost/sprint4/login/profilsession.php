<?php
session_start();

if (!$_SESSION["login"]) {
    header("location: loginsession.php");
    exit;
}
if (isset($_POST["submit"])) {
$_SESSION = [];
session_destroy();
session_unset();

header("location: loginsession.php");
exit;
}
// echo $_SESSION['login'];
 
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