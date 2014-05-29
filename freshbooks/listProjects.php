<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Invoice.php";

//new Client object
$invoice = new FreshBooks_Invoice();

// populate properties
$invoice->clientId = 142596;

//lines (items) is array of asoc. arrays
$invoice->lines = array(
    //1st item
    array(
        'name' => 'xyz',
        'unitCost' => 99.99
        //all other required properties should be populated
    ),
    //2nd item
    array(
        'name'=>'yyy',
        'unitCost'=>199.99,
    )
);

//try to get client with client_id $clientId
if(!$invoice->create()){
	//no data - read error
	echo $invoice->lastError;
} else {
	//investigate populated data
	print_r($invoice);
	echo "<hr>";
	echo $invoice->invoice_id;
}