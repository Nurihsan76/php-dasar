<?php
$buku = [
    [
        "judul" => "fisika",
        "isbn" => "085314"
    ],
    [
        "judul" => "kimia",
        "isbn" => "811297"
    ],
    [
        "judul" => "biologi",
        "isbn" => "148112"
    ]
    ];

//$i=true;
//while ( $i){
//function Pembukaan(){
echo "====================="."\n";
echo "|      Welcome      |"."\n";
echo "====================="."\n";
echo "1. meminjam buku "." "."2. mengembalikan buku"."\n";
echo "apa yang ingin anda lakukan : ";
$pilihan = trim(fgets(STDIN));

echo "masukkan nama : ";
$nama = trim(fgets(STDIN));
echo "masukkan asal : ";
$asal = trim(fgets(STDIN));
print_r($buku);
echo "1. fisika "." "."2. kimia "." "."3. biologi "."\n";
echo "pilih buku : ";
$pilihbuku = trim(fgets(STDIN));
//}
//$i=false;

//     if ($pilihan == 'y'){
// }elseif($pilihan == 'n'){
//     echo "thx". "\n";
//     $i=false;
//     }else{
//         echo "lol";
//         $i=false;
//     }
//}
class Perpustakaan{
    public $nama,
            $asal,
            $pilihbuku;
            
    public function __construct($nama = "nama", $asal = "asal",
                            $pilihbuku = "pilihbuku"){
        $this->nama = "$nama";
        $this->asal = "$asal";
        $this->pilihbuku = "$pilihbuku";



}
            
        function peminjaman(){
            return "====================="."\n".
                    "      peminjaman     "."\n".
                    "====================="."\n".
                    "nama : ".$this->nama."\n".
                    "asal : ".$this->asal."\n".
                    $this->pilihbuku."\n".
                    "======================="."\n";
}

    function pengembalian(){
            return "====================="."\n".
                    "     pengembalian    "."\n".
                    "====================="."\n".
                    "nama : ".$this->nama."\n".
                    "asal : ".$this->asal."\n".
                    $this->pilihbuku."\n".
                    "======================="."\n";

                }
                
}

// $contoh = new Perpustakaan("nurja", "bekasi");
//     echo $contoh->peminjaman();

if ($pilihbuku==1) {
    $pilihbuku = "buku : ".$buku[0]["judul"]."\n"."isbn : ".$buku[0]["isbn"]."\n";
    $pilihbuku."\n";
}elseif($pilihbuku==2) {
    $pilihbuku = "buku : ".$buku[1]["judul"]."\n"."isbn : ".$buku[1]["isbn"]."\n";
    $pilihbuku."\n";
}if ($pilihbuku==3) {
    $pilihbuku = "buku : ".$buku[2]["judul"]."\n"."isbn : ".$buku[2]["isbn"]."\n";
    $pilihbuku."\n";
}



if ($pilihan == 1){
    $contoh = new Perpustakaan($nama, $asal, $pilihbuku);
    echo $contoh->peminjaman();
}elseif($pilihan == 2){
    $contoh = new Perpustakaan($nama, $asal, $pilihbuku);
    echo $contoh->pengembalian();    
}else{
    echo "pilihan tidak tersedia";
}

// echo "(y/n)"."\n";
// $pilih = trim(fgets(STDIN));
// if echo ($pilih == "y"){
//     echo pembukaan();
// }



?>