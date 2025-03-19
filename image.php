<?php
include('php/query.php');
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
      <div class="container p-5 mt-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Name</label>
                  <input value="<?php echo $pName?>" type="text" name="pName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-danger"><?php echo $pNameErr?></small>
                </div>
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="pImage[]" multiple id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-danger"><?php echo $pImageNameErr?></small>
                </div>
                <button name="addProduct" class="btn btn-info">Add</button>
            </form>
      </div>
     </body>
</html>