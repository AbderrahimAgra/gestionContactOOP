<?php


class Dbh
{

    private $host='localhost';
    private $username='root';
    private $password='';
    private $dbname='gestioncontact';

    

    public function connection()
    {
        // $connect= new PDO('mysql:host=$this->host;dbname=$this->dbname',$this->username,$this->password);

        try {
            $connect = new PDO("mysql:host=$this->host;dbname=$this->dbname", 'root', '');

            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          
        
    }


    public function getData($req)
    {
        $sql=$this->connection()->prepare($req);
        return $sql;  
    }

}

$dbconnect = new dbh ;
$dbconnect->connection();
// print_r($dbconnect) ;

