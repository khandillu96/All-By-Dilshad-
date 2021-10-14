<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

session_start();
$_SESSION['favcolor']="green";
$_SESSION["favanimal"]="cat";

echo "session variable are set.";
?>
</body>
</html>