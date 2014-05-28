<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Client.php";

//new Client object
$client = new FreshBooks_Client();

// populate properties
$client->organization = "Cebu City Health";
$client->email = "alice@mrlemail.com";
$client->firstName = "Alicemarie";
$client->lastName = "Aycardo";

//try to get client with client_id $clientId
if(!$client->create()){
	//no data - read error
	echo $client->lastError;
} else {
	//investigate populated data
	print_r($client);
	echo "<hr>";
	echo $client->clientId;
}