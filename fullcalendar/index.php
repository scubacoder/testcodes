<?php
/**
 * Full Calendar practice
 * http://arshaw.com/fullcalendar/
 * 
 * 
 * */

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Vince Full Calendar</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
		<link type="text/css" rel="stylesheet" href="fullcalendar/fullcalendar.css" />
		<script type="text/javascript" src="fullcalendar/fullcalendar.js"></script>
	</head>
	<body>
		<div id="calendar"></div>
		
		<script type="text/javascript">
			$(function(){
				// full calendar
				$('#calendar').fullCalendar();
			});
		</script>
	</body>
</html>
