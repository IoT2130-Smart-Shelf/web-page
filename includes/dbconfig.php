<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$firebase = (new Factory)
    ->withServiceAccount('includes/smart-shelf-44c69-firebase-adminsdk-ybsc7-fe02c5deb9.json')
    ->withDatabaseUri('https://smart-shelf-44c69-default-rtdb.firebaseio.com/');

$database = $firebase->createDatabase();
$auth = $firebase->createAuth();

?>