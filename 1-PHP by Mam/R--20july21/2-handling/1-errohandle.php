<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

if(!file_exists(lorem.txt)){

	die("file not file");
}else{
	$file=fread("lorem.txt","r");
}

?>
</body>
</html>