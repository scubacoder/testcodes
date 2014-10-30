<?php
/**
 * Given a date.
 * Calculate the Sunday of that date.
 * Calculate the Saturday of that date.
 * Oct302014
 * 
 * @author Vincent Aycardo <vinceaycardo@gmail.com>
 * */
 
//$mydate = "2014-10-30";	// Thurs
$mydate = "2014-10-15";	// Wed
//$mydate = "2014-10-26";	// Sun
//$mydate = "2014-11-01";	// Sat

// convert to unix time stamp
$uts = strtotime($mydate);
// get the day of the week
$myday = date("w", $uts); // 0 = sun, 6 = sat 

// calculate Sunday
$mySunday = $mydate;
if ($myday !== "0") {
	$mySunday = date("Y-m-d", strtotime("last Sunday", $uts));;
}

// calculate Saturday
$mySaturday = $mydate;
if ($myday !== "6") {
	$mySaturday = date("Y-m-d", strtotime("next Saturday", $uts));;
}

echo "Sunday: $mySunday<br>Saturday: $mySaturday";
