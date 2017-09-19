<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale= 1">
	<style type="text/css">
	#postal, #fName, #lName,#uName,#pWord, #location, #postal
	{
		width: 70%;

	}

	
	
	
	</style>
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
 		<link rel="stylesheet" href="css/bootstrap.min.css">
 		<link rel="stylesheet" type="text/css" href="template.css">

		<title>registration.php</title>
		<?php include "connection.php"; ?>
	</head>
		<body>
			<div class = "container padding-top-10">
				<div class="panel panel-default">
					<div class="panel-heading">Registration</div>
						<div class="panel-body">					
											<form action="/action_page.php">


												
													<label for = "fName" class = "control-label">First Name</label>

								  					<input type="text" name="fName" class = "form-control" placeholder="Enter First Name" id="fName">

								  					<label for = "lName" class = "control-label">Last Name</label>

								  					<input type="text" name="lName" class = "form-control" placeholder="Enter Last Name" id="lName">
								  					<label for = "uName" class = "control-label">Username</label>

								  					<input type="text" name="Username" class = "form-control" placeholder="Enter Last Name" id ="uName">
								  					<label for = "pWord" class = "control-label">Password</label>

								  					<input type="Password" name="Password" class = "form-control" placeholder="Enter Last Name" id="pWord">
								  					<label for = "location" class = "control-label">Location</label>

								  					<input type="text" name="location" class = "form-control" placeholder="Enter Last Name" id="location">
								  					<label for = "postal" class = "control-label">Postal Code</label>

								  					<input type="text" name="postal" class = "form-control" placeholder="Enter Last Name" id="postal">
								  					<br><br>
								  					<input type="submit" value="Submit">
											</form>
						</div>						
					
				</div>
			</div>	


	
		<scrip src ="js/bootstrap.min.js"> </script>
	 	</body>
</html>