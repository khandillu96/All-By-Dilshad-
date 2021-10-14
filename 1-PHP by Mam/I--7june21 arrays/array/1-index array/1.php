<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

 $cars= array ("valvo","bmw","toyota");

 //echo "i like ". $cars[0].",".$cars[1].",".$cars[2];

 for ($i=0;$i<count($cars);$i++){
 	echo $cars[$i]."<br>";
 }
?>
</body>
</html>