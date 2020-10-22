<?php

// function __autoload($class){
//   require_once($class.".php");
// }

spl_autoload_register(function($class){
  require_once ($class).".php";
});

// spl_autoload_register(function($class){
//   require_once __DIR__.'/'.($class).".php";
// });
$bebek = new bebek;
$kucing = new kucing;


// $bebekku = new bebek;
// $kucingku = new kucing;

echo "Mencoba autoload"."\n";