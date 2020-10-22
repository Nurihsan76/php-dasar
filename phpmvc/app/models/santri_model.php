<?php

class santri_model
{
    // private $santri = [
    //     [
    //         "nama" => "sanjaya",
    //         "asal" => "bekasi",
    //         "umur" => 18
    //     ],
    //     [
    //         "nama" => "sanjaya",
    //         "asal" => "bekasi",
    //         "umur" => 18
    //     ]
    // ];
        private $tabel = 'santri';
        private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    public function getallsantri()
    {
        $this->db->query("select * from $this->tabel");
        return $this->db->resultset();
    }
    
    public function getsantribyid($id)
    {
        $this->db->query("select * from $this->tabel where id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahdatasantri($data){
        $query = "insert into santri values (null, :nama, :asal, :umur)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('asal', $data['asal']);
        $this->db->bind('umur', $data['umur']);

        $this->db->execute();

        return $this->db->rowcount();
    }

    public function hapusdatasantri($id)
    {
        $this->db->query("delete from $this->tabel where id=:id");
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowcount();
    }    

    public function ubahdatasantri($data){
        $query = "update santri set nama = :nama, asal = :asal, umur = :umur where id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('asal', $data['asal']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowcount();
    }


    public function caridatasantri()
    {
        $keyword = $_POST['keyword'];
        $query = "select * from $this->tabel where nama like :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        
        return $this->db->resultset();
    }
    

}
