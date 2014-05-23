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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link type="text/css" rel="stylesheet" href="fullcalendar/fullcalendar.css" />
		<script type="text/javascript" src="fullcalendar/fullcalendar.js"></script>
	</head>
	<body>
		<div id="calendar"></div>
		
		<script type="text/javascript">
			$(function(){
				console.log("start");
				// full calendar
				$('#calendar').fullCalendar({
					header: {
						left: 'prev today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay next'
					},
					editable: true,
					dayClick: function(){
						alert("a day has been clicked");
					}
				});
			});
		</script>
	</body>
</html>
