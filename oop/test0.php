<?php
class dataSantri{
    
    public static $santri = [
    [
        "nama" => "Arif",
        "nik" => "T001"
    ],
    [
        "nama" => "nurja",
        "nik" => "T002"
    ],
    [
        "nama" => "sanjaya",
        "nik" => "T003"
    ]

];

}

class aksi extends dataSantri{
public static function tambah(){
    echo "ingin menambahkan berapa santri : ";
    $jumlah = trim(fgets(STDIN));
    for ($i=1; $i<=$jumlah; $i++){
        echo "maasukkan data ke - ".$i."\n";
        echo "nama : ";
        $data["nama"] = trim(fgets(STDIN));
        echo "nik : ";
        $data["nik"] = trim(fgets(STDIN));
        $datasantri[] = $data;
        $seluruhdata = array_merge(self::$santri, $datasantri);
        print_r($seluruhdata);
    }
}

public static function edit(){
    print_r(self::$santri);
    echo "pilih santri yang ingin diedit : ";
    $pilihedit = trim(fgets(STDIN));
    echo "nama : ";
    $data["nama"] = trim(fgets(STDIN));
    echo "nik : ";
    $data["nik"] = trim(fgets(STDIN));
    $datasantri[] = $data;
    print_r($datasantri);

}

public function hapus(){
   print_r(self::$santri);
    echo "pilih data yang ingin di hapus : ";
    $pilihhapus = trim(fgets(STDIN));
    unset(self::$santri[$pilihhapus]);
    print_r(self::$santri);
    //  array_splice(self::$santri,0,3);
    //      print_r(self::$santri);
    }

// public function hapus($pilihhapus){
//     unset(self::$santri[$pilihhapus]);
//     print_r(self::$santri);
// }

// public static function hapus(){
//     print_r(self::$santri);
//     echo "pilih santri yang ingin dihapus : ";
//     $pilihhapus = trim(fgets(STDIN));
//     if ($pilihhapus == 0){
//         unset (self::$santri[0]);
//         print_r(self::$santri);
//     }elseif ($pilihhapus == 1) {
//         unset(self::$santri[1]);
//         print_r(self::$santri);
//     }elseif ($pilihhapus == 2) {
//         unset(self::$santri[2]);
//         print_r(self::$santri);
//     }
// }
}

$loop = true;
while ($loop) {
    echo "|1. tambah |2. edit |3. hapus "."\n";;
    echo "apa yang anda akan lakukan : ";
    $aksi = trim(fgets(STDIN));
switch ($aksi) {
    case 1:
        aksi::tambah();
        break;
    case 2:
        aksi::edit();
        break;
    case 3:
        aksi::hapus();
    break;
   
    default:
        echo "menu yang anda inpu tidak tersedia"."\n";
        break;
}

echo "apakah anda ingin masih ingin melakukan sesuatu (y/n) ";
$pilihan = trim(fgets(STDIN));
if ($pilihan == "n") {
    echo "terima kasih"."\n";
    $loop  = false;
}
}



















    // if ($aksi == 1){
    //     aksi::tambah();
    // }elseif ($aksi == 2) {
    //     aksi::edit();
    // }elseif ($aksi == 3) {
    //     aksi::hapus();
    // }else{
    //     echo "plihan tidak tersedia";
    // }
    




?>
