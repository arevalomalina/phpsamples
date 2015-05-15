<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();

echo "\n*** Create and commit a new transaction ***\n";
// Get a user card.
$card = $user->getCardById('8645a6d0-2dea-4733-ac83-8917a5452aa1');
// Create a new transaction.
$transaction = $card->createTransaction('malina+dogs@bitreserve.org', '1', 'USD');
// Commit the transaction
$transaction->commit();
print_r($transaction->toArray());
