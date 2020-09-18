<?php
class Perpustakaan{
    public $nama,
            $asal,
            $judul,
            $isbn,
            $waktu,
            $halaman;

    public function __construct($nama = "nama", $asal = "asal",
                            $judul = "judul", $isbn = "isbn", $waktu = "waktu",
                            $halaman = "halaman"){
        $this->nama = "$nama";
        $this->asal = "$asal";
        $this->judul = "$judul";
        $this->isbn = "$isbn";
        $this->waktu = "$waktu";
        $this->halaman = "$halaman";




}
            
        function peminjaman(){
            return "====================="."\n".
                    "      peminjaman     "."\n".
                    "====================="."\n".
                    "nama : ".$this->nama."\n".
                    "asal : ".$this->asal."\n".
                    "buku : ".$this->judul."\n".
                    "isbn : ".$this->isbn."\n".
                    "waktu : ".$this->waktu."\n".
                    "======================="."\n";
}

    function pengembalian(){
            return "====================="."\n".
                    "     pengembalian    "."\n".
                    "====================="."\n".
                    "nama : ".$this->nama."\n".
                    "asal : ".$this->asal."\n".
                    "buku : ".$this->judul."\n".
                    "isbn : ".$this->isbn."\n".
                    "halaman : ".$this->halaman."\n".
                    "======================="."\n";

                }
                
}

 class PeminjamanBuku{
     public function cetak(Perpustakaan $contoh){
         $str1 = "{$contoh->peminjaman()}";
         return $str1;
     }
 }

 class PengembalianBuku{
    public function cetak(Perpustakaan $contoh){
        $str2 = "{$contoh->pengembalian()}";
        return $str2;
    }
}

$contoh1 = new Perpustakaan("nurja", "bekasi", "fisika",  "811297",  "3 hari", "0");
$contoh1->peminjaman();
$contoh2 = new Perpustakaan("sanjaya", "cikarang", "kimia","085314","0", "100");
$contoh2->pengembalian();


 $infoproduk1 = new PeminjamanBuku();
 echo $infoproduk1->cetak($contoh1);
 $infoproduk2 = new PengembalianBuku();
 echo $infoproduk2->cetak($contoh2);

?>
