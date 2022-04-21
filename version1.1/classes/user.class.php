<?php
session_start();
include'./Classes/dbhost.class.php';

class User extends Dbh
{
  
  public $username;
  public $password;
  public $date;

  
  public function getUsername(){
    return $this->username ;
  }

  public function setUsername($uname){
    $this->username=$uname;
  }

  public function getPassword(){
    return $this->password;
  }

  public function setPassword($password){
    $this->password=$password;
  }

  public function signIn(){

    $req ="select * from user where email =?";
    $result= $this->GetData($req);
    $result->execute([$this->username]);
    $res=$result->fetch(PDO::FETCH_ASSOC);
      // echo 'test';
      // echo 'pass from user '.$this->password;
      // echo '<br> password from databse '.$res['password'];
      // echo'<br>';
      // var_dump($res);
    if(password_verify($this->password,$res['password'])){    
          // session_start();
          $_SESSION['name'] = $res['email'];
          $_SESSION['date'] = $res['date'];
          $_SESSION['id'] = $res['id'];
          // echo 'logged in';
          return $res;
    }

  }


  public function signUp(){

    $date=date("F j, Y, g:i a");
    $req="INSERT INTO user (email ,password ,date) VALUES (?,?,'$date')";
    $result= $this->getData($req);
    // $result->bindParam(':email',$this->username);
    // $result->bindParam(':pass',$this->password);
    $result->execute([
        $this->username,
        $this->password
    ]);
    $is_signup_success=$result->rowCount() > 0;
    if($is_signup_success){
      session_start();
      $_SESSION['name'] = $this->username;
      $req="SELECT id FROM  user WHERE email=? limit 1";
      $result= $this->getData($req);
      $result->execute([$this->username]);
      $_SESSION['id']=$result->fetch()['id'];
      $_SESSION['date'] = $date;
    }
    return $is_signup_success;

  }


  public function logOut(){

  }

}


