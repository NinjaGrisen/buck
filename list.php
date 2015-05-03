<!DOCTYPE html>
<html>
<head>
	<title>Ajax list</title>

	<script src="js/jquery.js"></script>
	<script src="js/ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="css/myCSS.css">

</head>
<body>
<div id='listManagement'>
<form id='userForm'>
	Username:	<input type='text' name='username' /><br>
	Password:	<input type='password' name='password' /><br>
	First name:	<input type='text' name='fname' /><br>
	Last name:	<input type='text' name='lname' /><br>
	Age:		<input type='date' name='age' /><br>
	Country:	<input type='text' name='country' /><br>
	Gender:		<select name='gender'>
  					<option value="Female">Female</option>
  					<option value="Male">Male</option>
				</select><br>
	<input type="button" value='Get Users' id='getuser'><br>
	<input type="button" value='Add Users' id='adduser'>
</form>
<input type="button" value='Get List' id='getlist'><br>
<div id='result'>
<p class='pointer'>Here the result will come out!</p>
</div>
</div>
</body>
</html>

<?php



?>