<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();

$contact = $user->getContactById('1f0b8698-5c61-4f39-82b5-e89abd94970f');

echo sprintf("id: %s\n", $contact->getId());
