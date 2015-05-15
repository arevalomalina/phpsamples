<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();

$newCard = $user->createCard('test card', 'USD');

print_r($newCard->toArray());
