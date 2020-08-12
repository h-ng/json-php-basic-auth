<?php
require 'auth.php';
require 'json.php';
use \Simple\json;

    $function = $_GET['func'];

    if($key == $auth) {
	$json = new json();
	$object = new stdClass();
	$object->status->statuscode = "$valid_status_code";
        $object->status->error = "$valid_error";
        $object->status->apikey = "$valid_apikey_response";
        // If function is test then forge the json
        if($function == "test") {
          $object->data->Answer = "API Is working as expected (This is plain text)";
        // If function is credits then give credits
        } else if($function == "credits") {
          $object->data->Answer = "Hayden NG [Api Design/Development] AlexisTM [Github/JsonSystem]";
        }
	$json->response = $object;
	$json->send();
    } else if($key == "demo") {
        $json = new json();
        $object = new stdClass();
        $object->status->statuscode = "$demo_status_code";
        $object->status->error = "$demo_error";
        $object->status->apikey = "$demo_apikey_response";
        $object->data->Answer = "Unfortunately, there is no demo avaliable";
        $json->response = $object;
        $json->send();
    } else {
	$json = new json();
	$object->status->statuscode = "$invalid_status_code";
        $object->status->error = "$invalid_error";
        $object->status->apikey = "$invalid_apikey_response";
        $object->data->Answer = "$invalid_response";
	$json->response = $object;
	$json->send();
    }

