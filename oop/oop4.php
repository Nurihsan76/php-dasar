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
            
        public function peminjaman(){
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

 class PeminjamanBuku extends Perpustakaan{
     public function peminjaman(){
         $str1 = parent::peminjaman();
         return $str1;
     }
 }

 class pengembalianBuku extends Perpustakaan{
    public function pengembalian(){
        $str2 = parent::pengembalian();
        return $str2;
    }
}

$contoh1 = new peminjamanBuku("nurja", "bekasi", "fisika",  "811297",  "3 hari", "0");
echo $contoh1->peminjaman();
$contoh2 = new PengembalianBuku("sanjaya", "cikarang", "kimia","085314","0", "100");
echo $contoh2->pengembalian();


 //$infoproduk1 = new PeminjamanBuku();
 //echo $infoproduk1->peminjaman();
 //$infoproduk2 = new pengembalianBuku();
 //echo $infoproduk2->cetak($contoh2);

?>
