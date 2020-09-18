<?php

class Pengunjung{
    public $nama,
             $asal;
   
function santri(){
    return "======================="."\n".
           "|        santri       |"."\n".
           "======================="."\n".
           "nama : ".$this->nama."\n".
           "asal : ".$this->asal."\n".
           "======================="."\n";
    }
 }


class Perpustakaan{
    public  $judul,
            $isbn;  
function peminjaman(){
    return "========================"."\n".
           "| buku yang di pinjam  |"."\n".
           "========================"."\n".
           "buku : ".$this->judul."\n".
           "isbn : ".$this->isbn."\n".
           "========================="."\n";
}

function pengembalian(){
    return "========================"."\n".
           "|buku yang dikembalikan|"."\n".
           "========================"."\n".
           "buku : ".$this->judul."\n".
           "isbn : ".$this->isbn."\n".
           "========================"."\n";
}

}


$nurja = new Pengunjung();
$nurja->nama = "nurja";
$nurja->asal = "bekasi";

$buku = new Perpustakaan();
$buku->judul = "fisika";
$buku->isbn = "085314";


echo "===== peminjaman =====";
echo "\n";
echo $buku->peminjaman();
echo "\n";
echo $nurja->santri();
echo "\n";
echo "===== pengembalian =====";
echo "\n";
echo $buku->pengembalian();
echo "\n";
echo $nurja->santri();























// $contoh = new Perpustakaan();
// $contoh->nama = "nurja";
// $contoh->asal = "bekasi";
// $contoh->judul = "fisika";
// $contoh->isbn = "085314";


// echo $contoh->peminjaman();
// echo "\n";
// echo $contoh->pengembalian();




?>
