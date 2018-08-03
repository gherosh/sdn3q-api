<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Projects\Projects($client);

$label = 'ss';
$streamType = \SDN3Q\Enum\StreamType::VideoLivestream;

try {
	$project = $request::postProject($label,$streamType);

	print_r($project);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}
