<?php

class Perpustakaan{
    public $nama,
            $asal,
            $judul1,
            $isbn1,
            $judul2,
            $isbn2;
            
function peminjaman(){
    return "====================="."\n".
           "      peminjaman     "."\n".
           "====================="."\n".
           "nama : ".$this->nama."\n".
           "asal : ".$this->asal."\n".
           "buku : ".$this->judul1."\n".
           "isbn : ".$this->isbn1."\n".
           "======================="."\n";
}

function pengembalian(){
    return "====================="."\n".
           "     pengembalian    "."\n".
           "====================="."\n".
           "nama : ".$this->nama."\n".
           "asal : ".$this->asal."\n".
           "buku : ".$this->judul2."\n".
           "isbn : ".$this->isbn2."\n".
           "======================="."\n";
}

}

$minjem = new Perpustakaan();
$minjem->judul1 = "fisika";
$minjem->isbn1 = "085314";
$minjem->nama = "nurja";
$minjem->asal = "bekasi";
$minjem->judul2 = "biologi";
$minjem->isbn2 = "811297";

echo $minjem->peminjaman();
echo "\n";
echo $minjem->pengembalian();




?>
