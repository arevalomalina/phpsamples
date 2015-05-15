<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();

$emails = array("cuddlebug@pawmail.com");
$addresses = array();

$contact = $user->createContact('Sofie', 'Magoo', 'Hugs Inc', $emails, $addresses);

  echo sprintf("id: %s\n", $contact->getID());
  echo sprintf("FirstName: %s\n", $contact->getFirstName());
  echo sprintf("LastName: %s\n", $contact->getLastName());
  echo sprintf("Company: %s\n", $contact->getCompany());
  $emails = $contact->getEmails();
  foreach ($emails as $email) {
    echo sprintf("Email: %s\n", $email);
  }
  $addresses = $contact->getAddresses();
  foreach ($addresses as $address) {
    echo sprintf("Adresses: %s\n", $address);
  }
  echo sprintf("Name: %s\n", $contact->getName());
  echo "\n";


