<?php

class Persegi{
public static $panjang = 5,
              $lebar = 4;


public static function luaspersegi(){
    return self::$panjang*self::$lebar;
}



} 
echo "luas persegi : ";
echo Persegi::luaspersegi();
echo "\n";