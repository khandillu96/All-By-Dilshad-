<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$rem;
$rev='';
$a=1234;


while($a>=1)
{
	$rem=$a%10;
	$rev=$rev.$rem; // . need php,  + need  jacascript;
	$a=$a/10;
}

echo $rev;


?>
</body>
</html>