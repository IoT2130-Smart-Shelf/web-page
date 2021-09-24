<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/smart-shelf-44c69-firebase-adminsdk-ybsc7-fe02c5deb9.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://smart-shelf-44c69-default-rtdb.firebaseio.com')
    ->create();

$database = $firebase->getDatabase();

?>