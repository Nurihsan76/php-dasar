<?php

class connectpdo {
    public $server = 'localhost',
            $username = 'nurihsan',
            $password = 'pondokit';
    
    public function __construct(){
    $this->connect = new PDO("mysql:host=$this->server; dbname=test", $this->username, $this->password);
    }
    
    public function dataSantri(){
     $query = "SELECT * FROM santri";
     $show = $this->connect->prepare($query);
     // $show->execute(["muhammad", 70]);
     $show->execute();
    $result = $show->fetchALL(pdo::FETCH_ASSOC);
    print_r($result);
    }
    
    }
    
class aktivitas extends connectpdo {

public function tambah(){
    $this->dataSantri();
    echo "masukkan data santri yang ingin ditambahkan"."\n";
    echo "nama : ";
    $nama = trim(fgets(STDIN));
    echo "nilai : ";
    $umur = trim(fgets(STDIN));
    $query = "insert into santri (nama, umur) values (?, ?)";
    $show = $this->connect->prepare($query);
    $show->execute([$nama, $umur]);
    
    $k = count($this->dataSantri());

    $this->dataSantri()[$k]["nama"] = $nama;
    $this->dataSantri()[$k]["umur"] = $umur;
    
    $this->dataSantri();
    
}


public function ubah(){
    $this->dataSantri();
    echo "masukkan id santri yang ingin diubah : ";
    $id = trim(fgets(STDIN));
    echo "masukkan nama baru santri : ";
    $nama = trim(fgets(STDIN));
    echo "masukkan nilai baru santri : ";
    $umur = trim(fgets(STDIN));
    $query = "update santri set nama = '$nama', umur = $umur where id = $id";
    $show = $this->connect->prepare($query);
    $show->execute();
    $this->dataSantri();
}


public function hapus(){
    $this->dataSantri();
    echo "masukkan id santri yang ingin dihapus : ";
    $id = trim(fgets(STDIN));
    $query = "delete from santri where id = $id";
    $show = $this->connect->prepare($query);
    $show->execute();
    $this->dataSantri();
}

// public function tambah(){
//     $this->dataSantri();
//     echo "masukkan data santri yang ingin ditambahkan"."\n";
//     echo "nama : ";
//     $nama = trim(fgets(STDIN));
//     echo "nilai : ";
//     $umur = trim(fgets(STDIN));
//     $query = "insert into santri (nama, umur) values (?, ?)";
//     $show = $this->connect->prepare($query);
//     $show->execute([$nama, $umur]);
    
//     $k = count($this->dataSantri());

//     $this->dataSantri()[$k]["nama"] = $nama;
//     $this->dataSantri()[$k]["umur"] = $umur;
    
//     $this->dataSantri();
    
// }
























// public function lihat(){
//     echo "jumlah data santri"."\n";
//     $query = "select count(*) as jumlah_santri from santri";
//     $show = $this->connect->prepare($query);
//     $show->execute();
//     // $this->dataSantri();
//     $result = $show->fetchALL(pdo::FETCH_ASSOC);
//     print_r($result);
// }


// public function rata(){
//     echo "rata-rata nilai santri"."\n";
//     $query = "select avg(nilai) as rata_nilai_santri from santri";
//     $show = $this->connect->prepare($query);
//     $show->execute();
//     // $this->dataSantri();
//     $result = $show->fetchALL(pdo::FETCH_ASSOC);
//     print_r($result);
// }


// public function pintar(){
//     echo "santri dengan nilai diatas 85"."\n";
//     $query = "select * from santri where nilai > 80";
//     $show = $this->connect->prepare($query);
//     $show->execute();
//     // $this->dataSantri();
//     $result = $show->fetchALL(pdo::FETCH_ASSOC);
//     print_r($result);
// }


// public function bodoh(){
//     echo "santri dengan nilai dibawah 66"."\n";
//     $query = "select * from santri where nilai <= 65";
//     $show = $this->connect->prepare($query);
//     $show->execute();
//     // $this->dataSantri();
//     $result = $show->fetchALL(pdo::FETCH_ASSOC);
//     print_r($result);
// }







} 

echo "1. menambahkan data   2. mengubah data   3. menghapus data "."\n";
echo "apa yang ingin anda lakukan : ";
$pilih = trim(fgets(STDIN));
switch ($pilih) {
    case 1:
        $nambah = new aktivitas; 
        $nambah->tambah();
        break;
    case 2:
        $ubah = new aktivitas; 
        $ubah->ubah();
        break;
    case 3:
        $hapus = new aktivitas; 
        $hapus->hapus();
        break;
    
    default:
        echo "pilihan tidak tersedia"."\n";
        break;
}




















// echo "1. menambahkan data   2. melihat jumlah data santri   3. melihat rata-rata nilai santri "."\n".
// "4. santri dengan nilai diatas 80   5. santri dengan nilai dibawah 66"."\n";
// echo "apa yang ingin anda lakukan : ";
// $pilih = trim(fgets(STDIN));
// switch ($pilih) {
//     case 1:
//         $nambah = new aktivitas; 
//         $nambah->tambah();
//         break;
//     case 2:
//         $lihat = new aktivitas; 
//         $lihat->lihat();
//         break;
//     case 3:
//         $rata = new aktivitas; 
//         $rata->rata();
//         break;
//     case 4:
//         $pintar = new aktivitas; 
//         $pintar->pintar();
//         break;
//     case 5:
//         $bodoh = new aktivitas; 
//         $bodoh->bodoh();
//         break;
    
//     default:
//         echo "pilihan tidak tersedia"."\n";
//         break;
// }



?>