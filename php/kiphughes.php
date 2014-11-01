<?php
/**
 * Test for Kip Hughes
 * Aug182014
 * 
 * @author Vincent Aycardo <vinceaycardo@gmail.com>
 * */
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
 
// Given two arrays, determine if ALL of the contents in the first array exist in the second array. Do not use built in PHP functions.
function array_contains_all(array $input1, array $input2)
{
	$myflag = FALSE;
	$arrcount = 0;
	$arrcount1 = count($input1);
	for($i = 0; $i < $arrcount1; $i++) {	// loop through first array
		$isInArray = FALSE;	// flag to check if this array is in array 2
		$arrcount2 = count($input2);
		for($j = 0; $j < $arrcount2; $j++) {
			if ($input1[$i] == $input2[$j]) {
				$isInArray = TRUE;
			}
		}
		if ($isInArray) $arrcount++;
	}
	if ($arrcount == count($input1)) $myflag = TRUE;
	return $myflag;
}
 
// Given two arrays, determine if ANY of the contents in the first array exist in the second array . Do not use built in PHP functions.
function array_contains_any(array $input1, array $input2)
{
	$myflag = FALSE;
	for($i = 0; $i < count($input1); $i++) {	// loop through first array
		$isInArray = FALSE;	// flag to check if this array is in array 2
		for($j = 0; $j < count($input2); $j++) {
			if ($input1[$i] == $input2[$j]) {
				return TRUE;
			}
		}
		if ($isInArray) $myflag = TRUE;
	}
	return $myflag;
}
 
$print = array(
    'apple',
    'banana',
    array(
        'white',
        'black'
    )
);
assert(print_array($print) === 'applebananawhiteblack');
 
$input1 = array(
    'apple',
    'banana'
);
$input2 = array(
    'apple',
    'banana'
);
assert(array_contains_all($input1, $input2) === TRUE);
 
$input1 = array(
    'apple',
    'banana'
);
$input2 = array(
    'avocado',
    'apple',
    'banana'
);
assert(array_contains_all($input1, $input2) === TRUE);
 
$input1 = array(
    'avocado',
    'apple',
    'banana'
);
$input2 = array(
    'apple',
    'banana'
);
assert(array_contains_all($input1, $input2) === FALSE);
 
$input1 = array(
    'apple'
);
$input2 = array(
    'apple',
    'banana'
);
assert(array_contains_any($input1, $input2) === TRUE);
 
$input1 = array(
    'apple'
);
$input2 = array(
    'avocado',
    'banana'
);
assert(array_contains_any($input1, $input2) === FALSE);