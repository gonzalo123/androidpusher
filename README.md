Simple library to send push notifications to android devices

```php
// https://code.google.com/apis/console/
$apiKey = "myApiKey";
$regId = "device reg ID";

$pusher = new AndroidPusher\Pusher($apiKey);
$pusher->notify($regId, "Hola");

print_r($pusher->getOutputAsArray());
```