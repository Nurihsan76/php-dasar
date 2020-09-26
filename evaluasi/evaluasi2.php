<?php

class dataSantri{
    public static $santri = [
        [
            "nama" => "Arif",
            "nik" => "T001"
        ]
        ];
}

class admin extends dataSantri  {
public function tambah(){
    echo "masukkan data santri yang ingin ditambahkan "."\n";
    echo "nama santri : ";
    $nama = trim(fgets(STDIN));
    echo "nik santri : ";
    $nik = trim(fgets(STDIN));

    $index = count(self::$santri);

    self::$santri[$index]["nama"] = $nama;
    self::$santri[$index]["nik"] = $nik;

    print_r(self::$santri);

}

public function ubah(){

    print_r(self::$santri);

    echo "masukkan nik santri yang ingin diubah : ";
    $nik = trim(fgets(STDIN));

    foreach (self::$santri as $k => $v) {
        if (self::$santri[$k]["nik"] == $nik){
            echo "masukkan nama yang ingin diubah : ";
            $nama = trim(fgets(STDIN));

        self::$santri[$k]["nama"] = $nama;
        }
    }

    print_r(self::$santri);

}

public function hapus(){

    print_r(self::$santri);

    echo "masukkan nik santri yang ingin dihapus : ";
    $nik = trim(fgets(STDIN));
    
    foreach (self::$santri as $k => $v){
        if (self::$santri[$k]["nik"] == $nik){
            unset(self::$santri[$k]);
        }
    }
    self::$santri = array_slice (self::$santri,0,count(self::$santri));
    print_r(self::$santri);

}
}


$loop = true;
while ($loop){
    echo "1. menambahkan data   2. mengubah data   3. menghapus data"."\n";
    echo "apa yang ingin anda lakukan : ";
    $pilih = trim(fgets(STDIN));

switch ($pilih){
    case 1:
    admin::tambah();
    break;

    case 2:
    admin::ubah();
    break;

    case 3:
    admin::hapus();
    break;

    default;
    echo "pilihan tidak tersedia"."\n";
}

echo "ada yang masih ingin anda lakukan (y/n)";
$pilihan = trim(fgets(STDIN));

if ($pilihan == "y" || $pilihan == "Y"){
    $loop = true;
}elseif($pilihan == "n" || $pilihan == "N"){
    echo "thx"."\n";
    $loop = false;
}else{
    echo "pilihan tidak tersedia"."\n";
    $loop = false;
}
}






































// class dataSantri{
//     public static $santri = [
//     [
//         "nama" => "Arif",
//         "nik" => "T001"
//     ]
// ];
// }

// class aktivitas extends dataSantri{
//     public function nambah(){
//         echo "namsukkan data santri yang ingin ditambahkan "."\n";
//         echo "masukkan nama : ";
//         $nama = trim(fgets(STDIN));
//         echo "masukkan nik : ";
//         $nik = trim(fgets(STDIN));

//         $index = count(self::$santri);

//         self::$santri[$index]["nama"] = $nama;
//         self::$santri[$index]["nik"] = $nik;

//         print_r(self::$santri);
//     }

//     public function ubah(){
//         print_r(self::$santri);
//         echo "masukkan nik santri yang ingin diubah : ";
//         $nik = trim(fgets(STDIN));
//         foreach (self::$santri as $k => $v){
//             if(self::$santri[$k]["nik"] == $nik){
//                 echo "masukkan nama : ";
//                 $nama = trim(fgets(STDIN));
//                 self::$santri[$k]["nama"] = $nama;
//            }
//            print_r(self::$santri);
            
//         }
//     }

//     public function hapus(){
//         print_r(self::$santri);
//         echo "masukkan nik santri yang ingin hapus : ";
//         $nik = trim(fgets(STDIN));
//         foreach (self::$santri as $k => $v){
//             if (self::$santri[$k]["nik"] == $nik){
//                 unset (self::$santri[$k]);
//             }
//         }
//         self::$santri = array_slice(self::$santri,0,count(self::$santri));
//         print_r(self::$santri);
//     }
// }

// $loop = true;
// while($loop){
//     echo "1. menambahkan data santri   2. mengubah data santri   3. menghapus data santri "."\n";
//     echo "apa yang ingin and lakukan : ";
//     $aksi = trim(fgets(STDIN));
// switch ($aksi) {
//     case 1:
//     aktivitas::nambah();
//     break;

//     case 2:
//     aktivitas::ubah();
//     break;

//     case 3:
//     aktivitas::hapus();
//     break;

//     default:
//     echo "pilihan tidak tersedia";
//     }

//     echo "ada yang masih ingin anda lakukan (y/n) ";
//     $pilih = trim(fgets(STDIN));
//     if ($pilih == "y" || $pilih == "Y"){
//         $loop = true;
//     }elseif($pilih == "n" || $pilih == "N"){
//         echo "thx"."\n";
//         $loop = false;
//     }else{
//         echo "pilihan tidak tersedia"."\n";
//         $loop = false;
//     }
// }
?>