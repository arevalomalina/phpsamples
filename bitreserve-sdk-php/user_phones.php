<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();
$phones = $user->getPhones();

echo "\n*** User Information ***\n";
foreach($phones as $phone){
  echo sprintf("Id: %s\n", $phone['id']);
  echo sprintf("Verified: %s\n", $phone['verified']);
  echo sprintf("Primary: %s\n", $phone['primary']);
  echo sprintf("e164Masked: %s\n", $phone['e164Masked']);
  echo sprintf("National Masked: %s\n", $phone['nationalMasked']);
  echo sprintf("International Masked: %s\n", $phone['internationalMasked']);
  echo "\n";
  }
