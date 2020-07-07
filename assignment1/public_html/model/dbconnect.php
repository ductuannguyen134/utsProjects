<?php
class dbconnect{
    public function connect(){
        $host = 'rerun';
        $user = 'potiro';
        $pass = 'pcXZb(kL';
        $db = 'poti';
        $connection = mysqli_connect($host,$user,$pass,$db);
        return $connection;
    }
}