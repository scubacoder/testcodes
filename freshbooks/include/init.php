<?php
/**
 * Copy this file as init.php and update url and token
 */

define("LIB_PATH", realpath(dirname(__FILE__) . '/../library'));
include_once LIB_PATH . '/FreshBooks/HttpClient.php';
//you API url and token obtained from freshbooks.com
$url = "https://myrestorationleads.freshbooks.com/api/2.1/xml-in";
$token = "baa4e5d7780730639d7f21820dc0047e";

//init singleton FreshBooks_HttpClient
FreshBooks_HttpClient::init($url,$token);
