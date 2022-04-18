<?php

class Dbh
{

    private $host='localhost';
    private $username='root';
    private $password='';
    private $dbname='gestioncontact';

    public function connection(){
        $connect= new PDO("mysql:host=$this->host;$this->dbname",$this->username,$this->password);
        return $connect;
    }


    public function getData($req){
        $sql=$this->connection()->prepare($req);
        return $sql;  
    }

}

