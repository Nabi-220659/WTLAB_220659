<?php
require __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google\Client();
$client->setClientId($_ENV[""]);
$client->setClientSecret($_ENV[""]);
$client->setRedirectUri($_ENV[""]);


if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $user  = $oauth->userinfo->get();

    $_SESSION['user_name']  = $user->name;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_pic']   = $user->picture;

    header("Location: dashboard.php");
    exit;
}
?>


