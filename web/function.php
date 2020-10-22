<?php
session_start();
class connectpdo{
    public $server = "localhost",
        $username = "nurihsan",
        $password = "pondokit";

    public function __construct(){
            try{
            $this->connect = new PDO("mysql:host=$this->server; dbname=web", $this->username, $this->password);
            }catch(PDOException $e){
                echo $e->getMessage;
        }
    }

    public function read(){
        $query = "SELECT doa.id, doa.judul, doa.doa, doa.artinya, tag.tag FROM doa join tag on doa.id_tag = tag.id";
        $data = $this->connect->query($query);
        // $result = $data->fecthALL(pdo::FETCH_ASSOC);
        return $data;
    }

    // public function id(){
    //     $query = "SELECT id FROM doa";
    //     $data = $this->connect->query($query);
    //     // $result = $data->fecth(pdo::FETCH_ASSOC);
    //     return $data;
    // }

    public function create($judul, $doa, $artinya, $id_tag) {
        $query = "INSERT INTO doa VALUES (null, '$judul', '$doa', '$artinya', $id_tag)";
        $data = $this->connect->query($query);
        header ('location: web.php');
    }
    
    public function delete($id){
    $query = "DELETE FROM doa WHERE id = $id";
    $data = $this->connect->query($query);
    header ('location: web.php');
    }
    
    public function update($id, $judul, $doa, $artinya, $id_tag ){
        $query = "UPDATE doa SET judul = '$judul', doa = '$doa', artinya = '$artinya', id_tag = '$id_tag'  WHERE id = $id";
        $data = $this->connect->query($query);
        // $data->execute();
        header ('location: web.php');
        }

    public function register($username, $password, $password2){
        if(!empty($username and $password and $password2)){
            if($password == $password2){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO user VALUES (null, '$username', '$password')";
            $data = $this->connect->query($query);
            header ('location: login.php');
            }else{
                header ('location: register.php');
            }
        
        }else {
            header ('location: register.php');
        }

        
    }

    public function login($username, $password){
        $query = "SELECT * FROM user WHERE username = '$username'";
        $data = $this->connect->query($query);
        foreach ($data as $k){

        }

        if (password_verify($password, $k['password'])){
            header ('location: web.php');
            $_SESSION['login'] = true;
        }else{
            header ('location: login.php');
        }
    }

    
}


























?>