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
      <div class="container p-5">
                <form action="" method="post">


                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="uEmail" value="<?php echo $userEmail?>"  id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
                    </div>

                    <div class="form-group">
                      <label for="">Password</label>
                      <input value="<?php echo $userPassword?>" type="text" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
                    </div>
                    <button class="btn btn-info"  name="userLogin">Login</button>
                </form>
      </div>
  </body>
</html>