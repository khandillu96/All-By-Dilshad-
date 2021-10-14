<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$x=7;
$y=7;
 

 function display(){
 	$GLOBALS["y"]=$GLOBALS["x"]+$GLOBALS["y"];

 	echo $GLOBALS["y"];
 }

 display();
 echo $GLOBALS["y"];
 echo $y;
?>
</body>
</html>