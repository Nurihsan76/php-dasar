<?php

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    //cek username / password
    if($_POST["username"] == "nurihsan" && $_POST["password"] == "Nu190401") {
    
    //jika benar, redirect ke halaman admin
    header ("Location: admin.php");
    exit;
    } else {

        //jika salah,tampilkan kesalahan
        $error = true;
    }
    
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
    <h1>log-in admin</h1>
    
    <ul>

    <form action="" method=post>
    <li>
    
    <label for="username">username :</label>
    <input type="text" name="username" id="username">
    
    </li>
    <li>
    
    <label for="password">password :</label>
    <input type="password" name="password" id="password">
    
    </li>
    <li>
    
    <button type="submit" name="submit">masuk</button>
    
    </li>
    
    
    </form>
    
    </ul>

<?php if(isset($error)) { ?>
<p style="color : red;">username atau password salah</p>
<?php } ?>
</body>
</html>