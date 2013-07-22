<?php

include __DIR__ . "/vendor/autoload.php";

$apiKey = "myApiKey"; // https://code.google.com/apis/console/
$regId = "device reg ID";

$pusher = new AndroidPusher\Pusher($apiKey);
$pusher->notify($regId, "Hola");

print_r($pusher->getOutputAsArray());