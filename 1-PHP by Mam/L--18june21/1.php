<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="#">
		<label>name</label>
		<input type="text" name="name"><br>

		<label>email</label>
		<input type="text" name="email"><br>

		<input type="submit" name="submit">


	</form>



Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>



</body>
</html>