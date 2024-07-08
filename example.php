<?php

date_default_timezone_set('Europe/Amsterdam');

// Autoload composer
require __DIR__ . '/vendor/autoload.php';

// Set up connection
$connection = new \webburospring\SendCloud\Connection('key', 'secret');
$sendCloud = new \webburospring\SendCloud\SendCloud($connection);

// Request first page of parcels/shipments
$parcels = $sendCloud->parcels()->all();

var_dump($parcels);
