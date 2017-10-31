<?php
session_start();
include 'include/connection.php';
if(isset($_SESSION['login'])!=1){
  $_SESSION['err']="please login continue";
  $_SESSION['login']=0;
  header('location:index.php');
}

include 'include/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
    <form action="act_dashboard.php" method="POST">
      <div class="form-group">
       <label for="">change your personal name</label>
      <input type="text" name="personal-name" class="form-control">

      </div>

      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="change">
      </div>
      

      </form>
      </div>
  </div>
</div>
  

<?php
include 'include/footer.php';
?>