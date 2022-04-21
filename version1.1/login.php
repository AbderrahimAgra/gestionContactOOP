
<?php


// var_dump(password_verify("test@user.com",'$2y$10$PyfrsAQUDbsz4'));
//  exit();

include'./Classes/user.class.php';


$error = "";
var_dump($_POST);
if (isset($_POST['login'])){
  $user = new User();
    $user->setUsername($_POST['email']);
    $user->setPassword($_POST['password']);
    if($user->signIn()){
        header("Location: contacts_liste.php");
    }else{
         $error = "incorect username or password ";  
    }
}else{
  // session_start();
  if(isset($_SESSION['id'])){
    header("Location: contacts_liste.php");
  }


}


?>

<!-- header -->

    <?php include('./include/nav.inc.php') ; ?>

<!-- main -->

    <div class="authentification">
      <h2> Authenticate </h2>

      <form action="login.php" method="POST">

        <div class=" row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3">
            <span class="validation-msg"></span>
          </div> 
        </div>

        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword3">
            <span class="validation-msg"></span>
          </div>
        </div>
      
        <div class="row mb-3 ">
          <button type="submit" name="login" class="col-sm-4 offset-4 btn btn-primary">Sign in</button>
        </div>

      </form>

      <p class="d-flex justify-content-center my-5">No account? <a href="signUp.php">Sign up</a> here. </p>

    </div>


<!-- footer -->

<?php include('./include/footer.inc.php') ;?>