<?php
require_once 'vendor/autoload.php';

use Bitreserve\BitreserveClient as Client;

// Initialize the client.
$client = new Client(getenv('TOKEN'));

// Get the current user.
$user = $client->getUser();

echo $user->getEmail();
