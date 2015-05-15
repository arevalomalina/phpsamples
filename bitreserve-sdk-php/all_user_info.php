<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
$client = new Client(getenv('TOKEN'));

// Get the current user.
$user = $client->getUser();

// Expose all user information.
echo "\n*** User full information ***\n";
print_r($user->toArray());

