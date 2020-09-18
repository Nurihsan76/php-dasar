<?php
class Perpustakaan{
    public $nama,
            $asal,
            $judul1,
            $isbn1;
            
    public function __construct($nama = "nama", $asal = "asal",
                            $judul1 = "judul1", $isbn1 = "isbn1"){
        $this->nama = "$nama";
        $this->asal = "$asal";
        $this->judul1 = "$judul1";
        $this->isbn1 = "$isbn1";



}
            
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
                    "buku : ".$this->judul1."\n".
                    "isbn : ".$this->isbn1."\n".
                    "======================="."\n";

                }
                
}

 class cetakinfobuku{
     public function cetak(Perpustakaan $contoh){
         $str = "{$contoh->peminjaman()}";
         return $str;
     }
 }

$contoh = new Perpustakaan("nurja", "bekasi", "fisika", "085314");
    echo $contoh->peminjaman();


 $infoproduk = new cetakinfobuku();
 echo $infoproduk->cetak($contoh);

?>
