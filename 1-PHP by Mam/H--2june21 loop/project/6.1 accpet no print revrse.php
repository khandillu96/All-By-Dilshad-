<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$no=12345;

while($no>=1)
{
	$rev=$no%10;
	$no=$no/10;
	echo $rev;
}
?>
</body>
</html>