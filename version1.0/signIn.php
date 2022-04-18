<?php 

 require_once('connection.php');
  if(isset($_POST['submit'])){
   
    $email = $_POST["email"] ;
    $password = hash("md5", $_POST["password"]);

    if(empty($email) || empty($password)){
      header('location: ./login.php?err=champs vide  ou le compte n\'existe dans la base du donner');
    }
    
    $req = "SELECT * FROM user WHERE email ='".$email."'";
    $qer = mysqli_query($connection,$req);
    $user = mysqli_fetch_assoc($qer);
    if(!empty($user)){
      if($password == $user['password']){
        $_SESSION['user'] = $user;
        header('location: ./contact_liste.php');
      }else{
        header('location: ./login.php?err=Incorrect password!');

        
      }
    } 

  }
  