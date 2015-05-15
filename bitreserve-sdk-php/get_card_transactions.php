<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();
// Get user cards.
$card = $user->getCardById('8645a6d0-2dea-4733-ac83-8917a5452aa1');
$pager = $card->getTransactions();

echo "*** List of card transactions ***\n";
while ($pager->hasNext()) {
    $transactions = $pager->getNext();
    foreach ($transactions as $transaction) {
        echo sprintf("Date: %s\n", $transaction->getCreatedAt());
        echo sprintf("Status: %s\n", $transaction->getStatus());
        $origin = $transaction->getOrigin();
        echo sprintf("Origin: %s\n", $origin['description']);
        $destination = $transaction->getDestination();
        echo sprintf("Destination: %s\n", $destination['description']);
        echo sprintf("Amount: %s %s\n", $destination['amount'], $destination['currency']);
        echo "\n";
    }
}
