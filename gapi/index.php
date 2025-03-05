<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Hello this is index File</h1>
<?php
if(isset($_SESSION['user_email'])){
    ?>
    <a href="logout.php">Logout</a>
    <?php
}
else{
    ?>
<a href="<?php echo $authUrl?>">Login With Google</a>
    <?php
}

?>
</body>
</html>