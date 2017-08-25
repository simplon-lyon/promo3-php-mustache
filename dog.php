<?php
require('vendor/autoload.php');

$c = new \GuzzleHttp\Client();
$res = $c->request('GET', 'https://dog.ceo/api/breeds/list/all');

echo $res->getStatusCode() . "\n";
echo $res->getBody();
echo "\n";

// JSON Parsing
$obj = json_decode($res->getBody());
var_dump($obj->message->wolfhound);
echo "\n";