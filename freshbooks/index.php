<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Client.php";

//$clientId = 142596;
$clientId = 142802;

//new Client object
$client = new FreshBooks_Client();

//try to get client with client_id $clientId
if(!$client->get($clientId)){
	//no data - read error
	echo $client->lastError;
} else {
	//investigate populated data
	print_r($client);
	echo "<hr>";
	// Option #1 call via object
	echo $client->organization."<br>". $client->firstName ." ". $client->lastName." (". $client->clientId .")";
	// Option #2 convert object to array
	//$myarr = (array) $client;
	//echo $myarr['clientId']."<br>";
	//echo $myarr['lastName'].", ".$myarr['firstName']."<br>";
}