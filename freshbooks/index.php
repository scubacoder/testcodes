<?php

require 'vendor/autoload.php';

$domain = "https://myrestorationleads.freshbooks.com/api/2.1/xml-in";
$token = "baa4e5d7780730639d7f21820dc0047e";

Freshbooks\FreshBooksApi::init($domain, $token);

// Method names are the same as found on the freshbooks API
$fb = new Freshbooks\FreshBooksApi('client.list');

$fb->post(array(
	'email' => 'vinceaycardo@outlook.com'
));

$fb->request();

if ($fb->success()) {
	echo "successful! The full response is in an array below";
	var_dump($fb->getResponse());
} else {
	echo $fb->getError();
	var_dump($fb->getResponse());
}

