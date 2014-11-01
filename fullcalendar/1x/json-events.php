<?php

	$year = date('Y');
	$month = date('m');
	$stime = strtotime("2014-05-29 10:00");
	$etime = strtotime("2014-05-29 12:00");

	echo json_encode(array(
	
		array(
			'id' => 111,
			'title' => "Event1",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"
		),
		
		array(
			'id' => 222,
			'title' => "Event2",
			'start' => "$year-$month-20",
			'end' => "$year-$month-22",
			'url' => "http://yahoo.com/"
		),
		
		array(
			'id' => 223,
			'title' => "Vince Event",
			'start' => "2014-05-29 10:00",
			'end' => "2014-05-29 12:00",
			'allDay' => false,
			'url' => "http://yahoo.com/"
		)
	
	));

?>
