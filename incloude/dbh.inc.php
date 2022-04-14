<?php

class dbh
{
  private $servername;
  private $username;
  private $password;
  private $dbname;

protected function connect(){
  $this->servername='127.0.0.1';
  $this->username='root';
  $this->password='';
  $this->dbname='gestioncontact';
  
  $connect = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
  return $connect;
}

  
   
}