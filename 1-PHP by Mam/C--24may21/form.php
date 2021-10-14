<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#form
		{
			width: 50%;
			padding: 10px;
			margin: auto;
			background-color: lightgray;
			border-radius: 10px; 
		}

		input{
			padding-left: 10px;
			line-height: 30px;
			font-size: 16px;
			border-radius: 4px; 
		}

		#submit
		{
			width: 50%;
			margin-left: 100px;
			background-color:green;
			color: white;
			text-transform: capitalize;

		}

		#forms
		{
			padding: 10px;
		}

		.dob{
			width: 195px;
			font-size: 18px;
		}
	</style>
</head>
<body>
<div id="form">
	<form id="forms" method="post" action="welcome.php">
		

			<h2>Registration Form</h2>

			<label>First Name :</label><br>
			<input type="text" name="firstname" placeholder="First Name "><br><br>

			<label>Last Name :</label><br>
			<input type="text" name="lastname" placeholder="Last Name"><br><br>

			<label>Enter Your Email :</label><br>
			<input type="email" name="email" placeholder="Enter Your Email "><br><br>

			<label>Contact Number :</label><br>
			<input type="tel" name="contactno" placeholder="Contact Number"><br><br>

			<label> Date Of Birth :</label><br>
			<input type="date" class="dob" name="dob"><br><br>

			<label>Gender :</label><br>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other<br>
            <br>

            <label>Password :</label><br>
            <input type="Password" placeholder="Password " name="pw">
            <br><br>

            <input id="submit" type="submit" value="submit">
		</fieldset>
	</form>
</div>
</body>
</html>