<?php
$auth = exec('grep '.escapeshellarg($_GET['key']).' ./api.txt');
$key = $_GET['key'];
$return = "Hn.fyi API";

// Valid Key settings

$valid_apikey_response = "$key [Valid by Hn.fyi]";
$valid_status_code = "200 Ok [Recieved by Hn.fyi]";
$valid_error = "NaN";

// Demo key settings

$demo_apikey_response = "$key [Valid by Hn.fyi]";
$demo_status_code = "200 Ok [Recieved by Hn.fyi]";
$demo_error = "Your using $key Key, you may face limitations";

// Invalid key settings

$invalid_apikey_response = "Invalid/Non Existant API Key";
$invalid_status_code = "401 Bad [Authorisation required by Hn.fyi]";
$invalid_error = "422 Server understands request, can't proccess";
$invalid_response = "NaN [No return avaliable]";
