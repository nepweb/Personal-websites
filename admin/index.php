<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-md-4  col-md-offset-4">
<h1 align="center">Login form</h1>
<hr>
      <form  method="POST" action="login.php">
  <div class="form-group">
    <label for="">username</label>
    <input type="text" class="form-control" name="uname" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="upass" placeholder="Password">
  </div>
  
  <div class="form-group">
    
  <a href="#">Forgot password</a>

  
  </div>
  <button type="submit" class="btn btn-success" name="btn-login">login</button>
</form>
<br>
<?php
if(isset($_SESSION['err'])){
?>

<div class="alert alert-danger"><?=$_SESSION['err'];?></div>
<?php

session_unset($_SESSION['err']);
}
?>


</div>
</div>
</div>

   
  </body>
</html>