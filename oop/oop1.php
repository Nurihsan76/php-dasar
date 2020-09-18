<?php
//echo "====================="."\n";
//echo "|      Welcome      |"."\n";
//echo "====================="."\n";
//echo "1. meminjam buku "." "."2. mengembalikan buku"."\n";
//echo "apa yang ingin anda lakukan : ";
//$pilihan = trim(fgets(STDIN));
//
//echo "masukkan nama : ";
//$nama = trim(fgets(STDIN));
//echo "masukkan asal : ";
//$asal = trim(fgets(STDIN));
//echo "masukkan judul : ";
//$judul1 = trim(fgets(STDIN));
//echo "masukkan isbn : ";
//$isbn1 = trim(fgets(STDIN));
//
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

// class cetakinfobuku{
//     public function cetak(Perpustakaan $contoh){
//         $str = "{$contoh->peminjaman()}";
//         return $str;
//     }
// }

$contoh = new Perpustakaan("nurja", "bekasi", "fisika", "085314");
    echo $contoh->pengembalian();


// $infoproduk = new cetakinfobuku();
// echo $infoproduk->cetak($contoh);



























//if ($pilihan == 1){
//    $contoh = new Perpustakaan($nama, $asal, $judul1, $isbn1);
//    echo $contoh->peminjaman();
//}elseif($pilihan == 2){
//    $contoh = new Perpustakaan($nama, $asal, $judul1, $isbn1);
//    echo $contoh->pengembalian();    
//}else{
//    echo "pilihan tidak tersedia";
//}
?>
