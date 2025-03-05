<?php

require "vendor/autoload.php";

session_start();
$client = new Google_Client();
$client->setClientId('908145519978-m3men4chd188dlvoun3huurpv6h2fvsc.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/auth/gapi/callback.php');
$client->addScope('email');
$client->addScope('profile');
$authUrl = $client->createAuthUrl();

?>