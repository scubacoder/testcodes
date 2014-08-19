<?php

// Given an array, display each item in the array without using a loop. (Do not use built in functions to do this, like PHP's print_r; use a recursive function to implement)
function print_array(array $input)
{
	$arrcount = count($input);
	$arrstr = "";
	if ($arrcount > 0) {
		for($i = 0; $i < $arrcount; $i++){
			if (is_array($input[$i])) {	// check if element is array
				$arrstr .= print_array($input[$i]);
			} else {
				$arrstr .= $input[$i];
			}			
		}
	}
	return $arrstr;
}

$print = array(
    'apple',
    'banana',
    array(
        'white',
        'black'
    )
);

$rslt = print_array($print, 0);
echo $rslt;
