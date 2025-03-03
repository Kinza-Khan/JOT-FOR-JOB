<?php
include("php/query.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="conatiner p-5 mt-5">
        <form action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="userName" value="<?php echo $userName?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userNameErr?></small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="userEmail" value="<?php echo $userEmail?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" name="userPassword" value="<?php echo $userPassword?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
        </div>
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="text" name="userConfirmPassword" value="<?php echo $userConfirmPassword?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-danger"><?php echo $userConfirmPasswordErr?></small>
        </div>
        <button name="userRegister" class="btn btn-info">Register</button>
        </form>
      </div>
    
  </body>
</html>