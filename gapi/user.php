<?php
require "config.php";
if(!isset($_SESSION['user_email'])){
    echo "<script>location.assign('index.php')</script>";
}
?>

<?php

?>
<h1>Hello this is <?php echo $_SESSION['name']?></h1>
<img height="100px" src="<?php echo $_SESSION['picture']?>" alt="">
<h2><?php echo $_SESSION['user_email']?></h2>
<a href="logout.php">logout</a>

