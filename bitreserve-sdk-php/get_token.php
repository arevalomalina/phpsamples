<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client();

$token = $client->createToken('malina+dogs@bitreserve.org', 'PASSWORD', 'test test', null);

echo sprintf("Token: %s\n", $token['access_token']);
echo sprintf("Description: %s\n", $token['description']);
echo sprintf("Expires: %s\n", $token['expires']);
