<?php

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;
use Google\Auth\OAuth2;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

session_start();

$oauth2 = new OAuth2([
    'clientId'           => $_ENV["GOOGLE_CLIENT_ID"],
    'clientSecret'       => $_ENV["GOOGLE_CLIENT_SECRET"],
    'authorizationUri'   => 'https://accounts.google.com/o/oauth2/auth',
    'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
    'redirectUri'        => $_ENV["GOOGLE_REDIRECT_URI"],
    'scope'              => ['email', 'profile'],
]);

header("Location: " . $oauth2->buildFullAuthorizationUri());
exit;