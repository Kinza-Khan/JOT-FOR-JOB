<!-- string functions -->
 <!-- 1)strcmp
      2)explode  
      3)strrev

 -->        
      <!-- naming convention
       PascalCase
       camelCase
       snake_case
      -->
      <?php
      $str = "hello this is ali";
      $strArray = explode(' ',$str);
      print_r ($strArray);
      echo "<br>" ;
    $fileName = "img1.png.JPG";
    $fileNameArray = explode('.',$fileName);
    print_r($fileNameArray); //Array ( [0] => img1 [1] => png )
    echo "<br>";
    $fileExtension = $fileNameArray[count($fileNameArray)-1];
    echo $fileExtension ;

      ?>
      <form action="" method="post">
        <input type="file" name="cImage">
        <button name="sub" >Sub</button>
      </form>
      <?php
      if(isset($_POST['sub'])){
        $FName = strtolower($_POST['cImage']);
       $fNameArray = explode('.',$FName);
        $extension =  $fNameArray[count($fNameArray)-1];
       $allFormat = ["jpg","png" ,"svg" , "webp","jpeg"] ;
       if(!in_array($extension , $allFormat)){
                echo "invalid extension " . $extension ;
       }
       else{
        echo "valid extension " . $extension ;
       }

      }

      ?>