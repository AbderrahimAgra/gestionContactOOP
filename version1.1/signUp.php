<?php
include'./Classes/user.class.php';
if(isset($_POST['signup'])){
  $user=new user();
  $username=$_POST['username'];
  $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
  $user->setUsername($username);
  $user->setPassword($password);

  if($user->signUp()){
    echo 'chi tkherbiqa';
    $user->signIn();
    header("Location: contacts_liste.php");

  }
}else{
  // session_start();
  if(isset($_SESSION['id'])){
    header("Location: contacts_liste.php");
  }

}




?>

<!-- header -->

<?php include('./include/nav.inc.php') ?>

<!-- main -->
    <div class="authentification">
        <h2> Sign up </h2>

        <!-- //form -->
            <form method="post">

                <div class=" row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="username" class="form-control" id="inputEmail3">
                  </div> 
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password verify</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
              

                <div class="row mb-3 ">
                  <button type="submit" name="signup" class="col-sm-4 offset-4 btn btn-primary">Sign up</button>
                </div>

            </form>
        <p class="d-flex justify-content-center my-5">Alredy have an account? <a href="login.php">Login</a> here. </p>
    </div>

<!-- footer -->

<?php include('./include/footer.inc.php'); ?>