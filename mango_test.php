<?php
require 'vendor/autoload.php'; // only if composer used

$client = new MongoDB\Client("mongodb://localhost:27017");

$db = $client->testdb;
$collection = $db->users;

$result = $collection->insertOne([
    "name" => "Nabi",
    "role" => "student",
    "time" => date("Y-m-d H:i:s")
]);

echo "Inserted ID: " . $result->getInsertedId();
?>