<?php

require "config.php";

if(isset($_GET['code'])){
 
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // user info
    $google_oauth = new Google_Service_Oauth2($client);
    $user_info = $google_oauth->userinfo->get();

    $_SESSION['name'] = $user_info->name;
    $_SESSION['id'] = $user_info->id;
    $_SESSION['user_email'] = $user_info->email;
    $_SESSION['picture'] = $user_info->picture;
    
    // $query = $pdo->prepare("select * from users where email = :email");
    // $query->bindParam('email',$_SESSION['user_email']);
    // $query->execute();
    // $user = $query->fetch(PDO::FETCH_ASSOC);
    // if(!$user){
    //        $query = $pdo->prepare("insert into users () values ()");     
    // }
    
    header('location:user.php');

     
}


?>