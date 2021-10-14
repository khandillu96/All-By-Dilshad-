<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$str="<h2>hello world 11</h2> ";
$newstr=filter_var($str,FILTER_SANITIZE_STRING);

 echo $newstr;
?>
</body>
</html>