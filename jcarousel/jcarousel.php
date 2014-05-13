<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>JCarousel</title>
		<meta name="description" content="">
		<meta name="author" content="user">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="jcarousel/jquery.jcarousel.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#mycarousel').jcarousel({
					wrap: 'both'
				});
				$('#btnPrev').click(function() {
				    $('.jcarousel').jcarousel('scroll', '-=3');
				});
				
				$('#btnNext').click(function() {
				    $('.jcarousel').jcarousel('scroll', '+=3');
				});
			});
		</script>
		
		<style>
			/*
			This is the visible area of you carousel.
			Set a width here to define how much items are visible.
			The width can be either fixed in px or flexible in %.
			Position must be relative!
			*/
			.jcarousel {
			    position: relative;
			    overflow: hidden;
			    width: 600px;
			}
			
			/*
			This is the container of the carousel items.
			You must ensure that the position is relative or absolute and
			that the width is big enough to contain all items.
			*/
			.jcarousel ul {
			    width: 20000em;
			    position: relative;
			
			    /* Optional, required in this case since it's a <ul> element */
			    list-style: none;
			    margin: 0;
			    padding: 0;
			}
			
			/*
			These are the item elements. jCarousel works best, if the items
			have a fixed width and height (but it's not required).
			*/
			.jcarousel li {
		    /* Required only for block elements like <li>'s */
		    float: left;
		    height: 200px;
			}
		</style>
	</head>

	<body bgcolor="green">
		<div id="mycarousel" class="jcarousel">
			<ul>
				<li><img src="img/administration_thumb.jpg" width="200px"></li>
				<li><img src="img/auths_thumb.jpg" width="200px"></li>
				<li><img src="img/billing_thumb.jpg" width="200px"></li>
				<li><img src="img/charges_thumb.jpg" width="200px"></li>
				<li><img src="img/compliance_thumb.jpg" width="200px"></li>
				<li><img src="img/dashboard_thumb.jpg" width="200px"></li>
				<li><img src="img/home_screen_thumb.jpg" width="200px"></li>
			</ul>
		</div>
		<button id="btnPrev">Previous</button>
		<button id="btnNext">Next</button>
	</body>
</html>
