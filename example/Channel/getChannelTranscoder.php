<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Transcoder($client);

try {
	$transcoder = $request::getTranscoder(4703);
	print_r($transcoder);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

