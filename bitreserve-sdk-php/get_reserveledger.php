<?php

require_once 'vendor/autoload.php';

use \Bitreserve\BitreserveClient as Client;

// Initialize the client. In this case, we don't need an
// AUTHORIZATION_TOKEN because the Ticker endpoint is public.
$client = new Client();
// Get the reserve ledger
$pager = $client->getReserve()->getLedger();

print_r($pager->getNext());
