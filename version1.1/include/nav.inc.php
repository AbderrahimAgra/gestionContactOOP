<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/acceuil.css">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="contacts_liste.php">Contacts list</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <?php 
      if(isset($_SESSION['id'])){
      ?>

        <li class="nav-item">
          <a class="nav-link disabled" href="profile.php"><?php echo $_SESSION['name']?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="logout.php">Logout</a>
        </li>
        <?php }else{?>
          <li class="nav-item">
          <a class="nav-link disabled" href="login.php">Log in</a>
        </li>  

          <?php }?>
    </ul>
    
  </div>
</nav>
