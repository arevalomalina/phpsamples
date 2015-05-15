<?php
require_once 'vendor/autoload.php';
use Bitreserve\BitreserveClient as Client;
// Initialize the client.
$client = new Client(getenv('TOKEN'));
// Get the current user.
$user = $client->getUser();
// Get user transactions.
$pager = $user->getTransactions();
echo "*** List of user transactions ***\n";
while ($pager->hasNext()) {
    $transactions = $pager->getNext();
    foreach ($transactions as $transaction) {
      echo $transaction->getId();
      echo "\n";
      if($transaction->getId()=='401cd88e-a00b-47a6-90d4-0e369e35ba3b'){
        $transaction->cancel();
      }
    }
}
