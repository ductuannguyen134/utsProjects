<?php
include 'dbconnect.php';

echo "hello";

class model extends dbconnect {
    private $conn;
    public function __construct()
    {
        $dbcon = new parent();
        $this->conn =$dbcon->connect();
    }

    public function select($what){
        $sql = "SELECT * FROM products";
        $select = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $select;
    }

    public function query($sql){
        $a_sele = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $a_sele;
    }
}