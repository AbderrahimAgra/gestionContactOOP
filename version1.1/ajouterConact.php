<?php 
include('./Classes/contact.class.php');


if (isset($_POST['submit'])){
  
  $con = new Contact();
  $con->SetName($_POST['name']);
  $con->SetTelephone($_POST['phone']);
  $con->SetEmai($_POST['email']);
  $con->SetAdress($_POST['adress']);
  
  // $con->SetId();
  

  

   if($con->Add()==true){
     echo 'gooood';
    header("Location: contacts_liste.php");
    
   }else{
    $error = "Something Wrong !!!";
      
   }
  
  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New User</title>
</head>
<body class="container-fluid ">
  <h1 class="text-center bg-white mt-5">Add new contact</h1>
  <form class="m-4" method="POST" action="ajouterConact.php" enctype="multipart/form-data" class="col-12 col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 mt-5 pt-5" >
          <div class="mb-3">
            <input type="hidden" class="form-control"  name="id-user"  id="id-user">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text"  name="name"class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="text" class="form-control"  name="phone" id="phone">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="Email" class="form-control" name="email" id="email">
          </div>
          <div class="mb-3">
            <label for="adress" class="form-label">adress</label>
            <input type="text" class="form-control"  name="adress"  id="adress">
         
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Add Contact</button>
</form>
</body>
</html>