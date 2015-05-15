<?php
require_once 'vendor/autoload.php';
use \Bitreserve\BitreserveClient as Client;
// Initialize the client. In this case, we don't need an
// AUTHORIZATION_TOKEN because the Ticker endpoint is public.
$client = new Client();
// Get specific transaction
$transaction = $client->getReserve()->getTransactionById('44645dd0-02b9-4b00-a13a-2d1026ea7841');

print_r($transaction->toArray());
