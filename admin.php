<?php
include("php/query.php");
// if(!isset($_SESSION['adminEmail'])){
//     echo "<script>location.assign('login.php')</script>";

// }
?>
<h1>
<?php
if(isset($_SESSION['adminEmail'])){
    echo "Hello admin ";
}
?>
<?php
if(isset($_SESSION['adminEmail'])){
    ?>
    
<a href="adminLogout.php"><?php echo $_SESSION['adminName ']?>Logout</a>
    <?php
}
else{
    ?>
<a href="login.php">Login</a>
    <?php
}

?>


</h1>