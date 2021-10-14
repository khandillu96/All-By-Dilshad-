<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
session_start();
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

?>

</body>
</html>