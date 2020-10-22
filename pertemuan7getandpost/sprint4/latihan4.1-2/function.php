<?php
class connectpdo {
    public $server = 'localhost',
            $username = 'nurihsan',
            $password = 'pondokit';
            
            public function __construct(){
                try{                
                $this->connect = new PDO("mysql:host=$this->server; dbname=toko", $this->username, $this->password);
                }catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
            
            public function barang(){
                $query = "SELECT * FROM dagangan";
                $show = $this->connect->query($query);
                // $show->execute();
                $result = $show->fetchALL(pdo::FETCH_ASSOC);
                return $result;
            }
            public function tambah($barang, $harga, $kurir, $pengirim, $asal, $tujuan){
                $query = "INSERT INTO dagangan VALUES (null, '$barang', '$harga', '$kurir', '$pengirim', '$asal', '$tujuan')";
                $tambah = $this->connect->query($query);
                // $tambah->execute();
                        
            }


            public function hapus($id){
                $query = "DELETE FROM dagangan WHERE id = $id";
                $hapus = $this->connect->query($query);
                // $tambah->execute();
                    
            }

            public function ubah($barang, $harga, $kurir, $pengirim, $asal, $tujuan, $id){
                $query = "UPDATE dagangan SET  barang = '$barang', harga = '$harga', kurir = '$kurir', pengirim = '$pengirim', asal = '$asal', tujuan = '$tujuan' WHERE id = $id";
                $ubah = $this->connect->query($query);
                // $tambah->execute();
            }
        
            public function daftar($username, $password, $password2){


                if ($password === $password2) {
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO user VALUES (null, '$username', '$password')";
                    $daftar = $this->connect->query($query);
                    // $tambah->execute();

                    header ('location: login.php');
                }else{
                    header ('location: register.php');
                }
            }

            public function masuk($username, $password){

                $query = "SELECT * FROM user WHERE username = '$username'";
                $masuk = $this->connect->query($query);
                // $masuk->execute();
                $data = $masuk->fetchALL(pdo::FETCH_ASSOC);
                
                foreach($data as $k){

                }

                        if (password_verify($password, $k["password"])) {
                            $_SESSION["login"] = true;
                            header ("location: latihan4.1-2.php");
                            exit;
                            
                        }  
                        
                    

                }
            }
        
      