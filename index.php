
<?php 
include('./incloude/nav.php');

include('incloude/dbh.inc.php');
include('incloude/user.inc.php');
include('incloude/vewUser.php');

$users = new ViewUser();
$users->showAllUsers();

?>
<!-- main -->
<div class="main  ">
  
  <h1>Hello!</h1>
  <p><a href="">Sign up</a> to start creating your contact list.<br></p>
  <p>Already have an account? <a href="login.php">Login here</a>.</p>
  
</div>

<?php 
include('./incloude/footer.php')
?>