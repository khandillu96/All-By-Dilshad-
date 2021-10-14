<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
    echo $_SERVER['PHP_SELF']."<BR>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['HTTP_HOST']."<br>";
    echo $_SERVER['HTTP_REFERER']."<BR>";
    echo $_SERVER['HTTP_USER_AGENT']."<Br>";
     echo $_SERVER['SCRIPT_NAME']."<Br>";
     echo $_SERVER["REQUEST_METHOD"] ;
	?>












<BR><BR><BR><BR><BR><hr>
	<form method="POST" action="4.1-access-server.php">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>