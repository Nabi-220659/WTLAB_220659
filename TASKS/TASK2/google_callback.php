<?php

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;
use Google\Auth\OAuth2;
use GuzzleHttp\Client;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

session_start();

$oauth2 = new OAuth2([
    'clientId'           => $_ENV["GOOGLE_CLIENT_ID"],
    'clientSecret'       => $_ENV["GOOGLE_CLIENT_SECRET"],
    'authorizationUri'   => 'https://accounts.google.com/o/oauth2/auth',
    'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
    'redirectUri'        => $_ENV["GOOGLE_REDIRECT_URI"],
]);

if (isset($_GET['code'])) {

    $oauth2->setCode($_GET['code']);
    $token = $oauth2->fetchAuthToken();

    if (!isset($token['error'])) {

        $accessToken = $token['access_token'];

        // Use Guzzle to fetch user info manually
        $client = new Client();
        $response = $client->get('https://www.googleapis.com/oauth2/v2/userinfo', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        $user = json_decode($response->getBody());

        $_SESSION['user_name']  = $user->name;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_pic']   = $user->picture;

        header("Location: dashboard.php");
        exit;
    }
}