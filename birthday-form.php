<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/basic.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script>
	$(document).ready(function() {
		$('#form').submit(function(event) {
			event.preventDefault();
			var name = $('#name').val();
			var birthday = $('#birthday').val();
			$('#show-name').text(name);
			$('#show-bday').text(birthday);
			$('.response').addClass('show').delay(500);
		})
	})
</script>
<style>
	#form fieldset {
	-webkit-margin-start: 0;
    -webkit-margin-end: 0;
    -webkit-padding-before: 0;
    -webkit-padding-start: 0;
    -webkit-padding-end: 0;
    -webkit-padding-after: 0;
	}
</style>
</head>

<body>
<div id="neo-bday" class="col-xs-12 col-mid-12">
	<p class="welcome">Welcome to the NeoWs (Near-Earth Object Web Services) site!</p>
	<p>Would you like to learn about the object(s) strolling in space near earth on your birthday?  Fill out the fields below to find out!</p>
<form action="post" class="birthday-neo" id="form">   
<div id="cf-fieldset">
	<fieldset>
		<div class="form-field">
			<label for="name">First Name</label>
        	<input type="text" name="name" id="name" placeholder="First Name" required />                  
        </div>
        <div class="form-field">
        	<label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" placeholder="Birthday (MM/DD/YYYY)" required />
        </div>
	</fieldset>
	<input type="submit" name="submit" class="submit" id="submit-btn" value="Submit" />
</div>
</form>
<div class="response">
	<p>Hey <span id="show-name"></span>! Say hello to your NEO twin:</p>
	<table id="bday-neo">
		<thead>
			<tr>
				<th colspan="2" class="align-center">Neo Reference Id - 2001566<br>Name - 1566 Icarus (1949 MA)</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="align-right">NASA JPL URL:</td><td class="align-left"><a href="http://ssd.jpl.nasa.gov/sbdb.cgi?sstr=2001566" target="_blank">1566 Icarus</a></td>
			</tr>
			<tr valign="top">
				<td class="align-right">Estimated Diameter (km):</td><td class="align-left">(min) 1.1080388213<br>(max) 2.4776501261</td>
			</tr>
			<tr valign="top">
				<td class="align-right">Estimated Diameter (miles):</td><td class="align-left">(min) 0.6885031904<br>(max) 1.5395399365</td>
			</tr>
			<tr><td class="align-right">Potentially Hazardous Asteroid:</td><td class="align-left">True</td></tr>
			<tr><td class="align-right">Relative Velocity:</td><td class="align-left">(km/sec) 41.6895069002<br>(km/hr) 150,082.2248405645<br>(miles/hr) 93,255.2579849608</td></tr>
			<tr><td class="align-right">Miss Distance:</td><td class="align-left">(km) 60,640,208<br>(miles) 37,680,076</td></tr>
			<tr><td class="align-right">Orbit Determination Date</td><td class="align-left">11/21/2016 14:21:14</td></tr>
		</tbody>
	</table>
</div>
</div>
</body>
</html>