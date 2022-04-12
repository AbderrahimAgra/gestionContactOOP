<!-- header -->
<?php 
include('./incloude/nav.php')
?>
<!-- main -->
<div class="authentification">
  <h2> Authenticate </h2>
  <form>
    <div class=" row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>

      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3">
      </div> 
    </div>

    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3">
      </div>
    </div>
  
    <div class="row mb-3 ">
      <button type="submit" class="col-sm-4 offset-4 btn btn-primary">Sign in</button>
    </div>
  </form>
  <p class="d-flex justify-content-center my-5">No account? <a href="signUp.php">Sign up</a> here. </p>

</div>








<!-- footer -->
<?php 
include('./incloude/footer.php')
?>