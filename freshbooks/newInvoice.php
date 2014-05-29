<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Invoice.php";

//new Client object
$invoice = new FreshBooks_Invoice();

// populate properties
$invoice->clientId = 142596;
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