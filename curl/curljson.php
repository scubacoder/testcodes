<?php
/**
 * Calls a page and retrieves the JSON
 * 
 * @author Vincent Aycardo
 * */

	$url = "http://localhost/testcodes/curl/jsonpage.php";
	 
	// initiate curl
	$ch = curl_init();
	// will return the response. if false, it will print the response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	// set the url
	curl_setopt($ch, CURLOPT_URL, $url);
	// execute
	$result = curl_exec($ch);
	 
	// print_r
	print_r($result);
	 
	// dump a json
	var_dump(json_decode($result, TRUE));
	 
	// decode to array
	$pagearr = json_decode($result, TRUE);
	echo "name = ".$pagearr['name']."<br>age = ".$pagearr['age']."<br>occupation = ".$pagearr['occupation'];
