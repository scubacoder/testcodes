<!DOCTYPE html>
<html>
	<head>
		<title>Full Calendar</title>
		<link type="text/css" rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
		<script type="text/javascript" src="fullcalendar/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="fullcalendar/lib/moment.min.js"></script>
		<script type="text/javascript" src="fullcalendar/fullcalendar.min.js"></script>
	</head>
	<body>
		<h1>Full Calendar</h1>
		<div id='calendar'></div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#calendar').fullCalendar({
				dayClick: function(){
					console.log('a day has been clicked');
				},
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay'
				},
				firstDay: 0
			});
		});
	</script>
</html>