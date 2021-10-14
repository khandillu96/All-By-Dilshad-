<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$rem;
$sum=0;
$a=127;


while($a>0)
{
	$rem=$a%10;
	$sum=$sum+$rem;
	$a=$a/10;
}

echo $sum;


?>
</body>
</html>