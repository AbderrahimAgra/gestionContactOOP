<?php

include('./Classes/dbhost.class.php');

class Contact extends Dbh{


    public $id;
    public $id_user;
    public $name;
    public $telephone;
    public $email;
    public $adress;
   
public function getAllForUser($id_user){
    $req="SELECT * FROM contact WHERE id_user =?";
    $result= $this->getData($req);
    $result->execute([$id_user]);
   return $result->fetchAll();
}



    public function Select(){
        $req="SELECT * from contacts WHERE id =?";
        $result= $this->GetData($req);
          $result->execute([$this->id ]);
       return $result->fetchAll();
     
    }
  
    public function Add(){
        $req ="insert into contact(id_user,name,phone,email,adress) values (?,?,?,?,?) ";
        $exc =$this->GetData($req);
        $exc->execute([
            $this->id_user,
             $this->name,
             $this->telephone,
             $this->email,
             $this->adress 
            ]);
            return  $exc;
    }
    public function delet(){
        $req ="DELETE FROM contact where id =?";
        $exc =$this->GetData($req);
        $exc->execute([$this->id_user]);
        return $exc;
    }

    public function SelectById(){
        $req="select * from contact where id_user =?";
        $result= $this->GetData($req);
        $result->execute([$this->id_user]);
       return $result->fetch();
    }

    public function update(){

       

        $req =" UPDATE contact SET 
        name =?,phone =?,email =?,adress =?  WHERE id_user = ? ";
        $exc =$this->GetData($req);
        $exc->execute([
             $this->name,
             $this->telephone,
             $this->email,
             $this->adress,
             $this->id_user
            ] );
            return  $exc;

    }
    public function GetName()
    {
        return $this->name;
    }
     public function SetName($name)
    {
        $this->name=$name;
    }
     public function GetTelephone()
    {
        return $this->telephone;
    }
     public function SetTelephone($telephone)
    {
        $this->telephone=$telephone;
    }
     public function GetEmail()
    {
        return $this->email;
    }
     public function SetEmai($email)
    {
        $this->email=$email;
    }
    public function GetAdress()
    {
        return $this->adress;
    }
     public function SetAdress($adress)
    {
       $this->adress=$adress;
    }
    public function GetId()
    {
        return $this->id;
    }
     public function SetId($id)
    {
       $this->id=$id;
    }
    public function GetIdContact()
    {
        return $this->id_contact;
    }
     public function SetIdContact($id_user)
    {
       $this->id_user=$id_user;
    }



    }