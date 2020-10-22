<?php

session_start();

if (!$_SESSION["login"]) {
    header("location: login.php");
    exit;
}

require 'function.php';

if ($_GET['id'] > 0) {
    $hapus = new connectpdo;
    $hapus->hapus($_GET['id']);
    header("location: latihan4.1-2.php");
        exit;
    }


?>
