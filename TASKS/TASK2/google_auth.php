<?php
require __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google\Client();
$client->setClientId($_ENV[""]);
$client->setClientSecret($_ENV[""]);
$client->setRedirectUri($_ENV[""]);

$client->addScope("email");
$client->addScope("profile");

header("Location: " . $client->createAuthUrl());
exit;
?>
