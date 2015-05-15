<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();
// Get current user cards.
$cards = $user->getCards();

foreach($cards as $card) {
  if($card->getID() === '8645a6d0-2dea-4733-ac83-8917a5452aa1') {
    echo sprintf("Label: %s\n", $card->getLabel());
    echo sprintf("Id: %s\n", $card->getId());
    echo sprintf("Bitcoin Address: %s\n", $card->getAddress()['bitcoin']);
    echo sprintf("Balance: %s\n", $card->getBalance());
    echo "\n";
  } else {
    echo "Card not found";
  }

}
