<?php

class database
{
    private $host = db_host;
    private $db_name = db_name;
    private $user = db_user;
    private $pass = db_pass;

    private $dbh;
    private $stmt;


    public function __construct()
    {
        // data source name
        // $dsn = ;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value);
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindvalue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowcount(){
        return $this->stmt->rowcount();
    }
}
