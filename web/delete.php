<?php

require 'function.php';

// var_dump($_GET['id']);

if($_GET['id'] > 0){
    $conn = new connectpdo;
    $conn->delete($_GET['id']);
}

?>