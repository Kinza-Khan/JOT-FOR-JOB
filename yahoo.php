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
          <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <button name="sub" class="btn btn-info">Submit</button>
        </form>
    </div>
      </body>
      <?php
      if(isset($_POST['sub'])){
        $userEmail = $_POST['userEmail'];
        $restricedDomain = 'yahoo.com';
        $userEmailArray = explode('@',$userEmail);
        print_r($userEmailArray);
        $lastIndex = $userEmailArray[count($userEmailArray)-1];
        echo "<br>" . $lastIndex ;
        $strCmp = strcmp($restricedDomain ,   $lastIndex ); 
        echo "<br>" . $strCmp ;
        if($strCmp == 0){
                echo "<br>" . $userEmail . "restricted this domain " ;
        }
        else{
            echo "<br>" . $userEmail . " allowed domain " ;
        }

      }
      ?>
</html>