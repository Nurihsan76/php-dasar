<?php
if (!session_id()) {
    session_start();
}

require_once "../app/init.php";
require_once "../vendor/autoload.php";


// $app = new app;
use core\controller;
use core\app;

$app = new app;
$controller = new controller;
        