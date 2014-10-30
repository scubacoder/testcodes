<?php
/**
 * Given time1 and time2
 * Compute the difference between the two in minutes
 * Oct302014
 * 
 * @author Vincent Aycardo <vinceaycardo@gmail.com>
 * */
 
$timeone = "17:45:00";
$timetwo = "20:55:00";

// convert to unix timestamp
$timeone = strtotime($timeone);
$timetwo = strtotime($timetwo);

// subtract
$timediff = "";
if ($timetwo > $timeone) {
	$timediff = $timetwo - $timeone;
} else {
	$timediff = $timeone - $timetwo;
}

// display result
$timediff = $timediff / 60;
echo "
	time1: $timeone<br>
	time2: $timetwo<br>
	difference: $timediff minutes
";
