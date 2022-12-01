<?php

date_default_timezone_set("Europe/Istanbul");

require dirname(__DIR__, 1) . "/vendor/autoload.php";

use shellonline\client\Client;

$client = new Client();
$client->run();