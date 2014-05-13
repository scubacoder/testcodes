<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Select 2</title>
		<meta name="description" content="">
		<meta name="author" content="user">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="select2/select2.css" />
		<script type="text/javascript" src="select2/select2.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#e1").select2({
					placeholder: "Select a State"
				});
			});
		</script>
	</head>

	<body>
		<select multiple style="width: 100%;" id="e1" >
       <optgroup label="Alaskan/Hawaiian Time Zone">
           <option value="AK">Alaska</option>
           <option value="HI">Hawaii</option>
       </optgroup>
       <optgroup label="Pacific Time Zone">
           <option value="CA">California</option>
           <option value="NV">Nevada</option>
           <option value="OR">Oregon</option>
           <option value="WA">Washington</option>
       </optgroup>
       <optgroup label="Mountain Time Zone">
           <option value="AZ">Arizona</option>
           <option value="CO">Colorado</option>
           <option value="ID">Idaho</option>
           <option value="MT">Montana</option>
           <option value="NE">Nebraska</option>
           <option value="NM">New Mexico</option>
           <option value="ND">North Dakota</option>
           <option value="UT">Utah</option>
           <option value="WY">Wyoming</option>
       </optgroup>
       <optgroup label="Central Time Zone">
           <option value="AL">Alabama</option>
           <option value="AR">Arkansas</option>
           <option value="IL">Illinois</option>
           <option value="IA">Iowa</option>
           <option value="KS">Kansas</option>
           <option value="KY">Kentucky</option>
           <option value="LA">Louisiana</option>
           <option value="MN">Minnesota</option>
           <option value="MS">Mississippi</option>
           <option value="MO">Missouri</option>
           <option value="OK">Oklahoma</option>
           <option value="SD">South Dakota</option>
           <option value="TX">Texas</option>
           <option value="TN">Tennessee</option>
           <option value="WI">Wisconsin</option>
       </optgroup>
       <optgroup label="Eastern Time Zone">
           <option value="CT">Connecticut</option>
           <option value="DE">Delaware</option>
           <option value="FL">Florida</option>
           <option value="GA">Georgia</option>
           <option value="IN">Indiana</option>
           <option value="ME">Maine</option>
           <option value="MD">Maryland</option>
           <option value="MA">Massachusetts</option>
           <option value="MI">Michigan</option>
           <option value="NH">New Hampshire</option>
           <option value="NJ">New Jersey</option>
           <option value="NY">New York</option>
           <option value="NC">North Carolina</option>
           <option value="OH">Ohio</option>
           <option value="PA">Pennsylvania</option>
           <option value="RI">Rhode Island</option>
           <option value="SC">South Carolina</option>
           <option value="VT">Vermont</option>
           <option value="VA">Virginia</option>
           <option value="WV">West Virginia</option>
       </optgroup>
      </select>
	</body>
</html>