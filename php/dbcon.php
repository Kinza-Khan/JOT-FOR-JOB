<?php
$server = "mysql:host=localhost;dbname=practice" ; 
$user = "root";
$password = "" ;

$pdo = new PDO($server , $user , $password); 

if($pdo){
    // echo "<script>alert('connected')</script>";
}
?>