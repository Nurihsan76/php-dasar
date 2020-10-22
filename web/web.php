<?php
session_start();
if (!$_SESSION["login"]) {
    header('location: login.php');
}

if (isset($_POST['logout'])){
session_destroy();
session_unset();

header ('location: login.php');
}
require 'function.php';

$conn = new connectpdo;
$doa = $conn->read();
// $id = $conn->id();
if (isset($_POST['logout'])){
    header ('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>article</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="web.php"><button>home</button></a>
        <a href="create.php"><button>tambah doa</button></a>
        
        <h1>Doa Dan Wirid</h1>
        
        <div>
        <?php $i=1; ?>
<?php foreach($doa as $k) { ?>
    
<h2>doa ke - <?= $i?></h2>
<h2><?= $k["judul"]?></h2>
<p>kategori : <?= $k["tag"]?></p>
<p><?= $k["doa"]?></p>
<p><?= $k["artinya"]?></p>
<a href="update.php?id=<?=$k['id']?>"><button>ubah</button></a><a href="delete.php?id=<?= $k["id"]?>"><button>hapus</button></a>
<p>=============================================================================================================================</p>
<br>
<?php $i++ ?>
<?php } ?>
<form action="" method="post">
                    <button type="submit" name="logout">log out</button>
                </form>
       
</div>
</body>
</html>