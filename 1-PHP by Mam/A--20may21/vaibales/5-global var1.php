<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$x=10;
$y=10;

function display(){
	global $x,$y;
	$y=$x+$y;
	echo $y;
}

display();
echo $y;

?>
</body>
</html>