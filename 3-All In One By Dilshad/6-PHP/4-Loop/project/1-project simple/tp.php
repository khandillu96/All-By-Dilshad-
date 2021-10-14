<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$rem;
$rev=0;
$a=153;
$n=$a;

while($n>=1)
{
	$rem=$n%10;
	$rev=$rev+$rem*$rem*$rem;
	$n=$n/10;
	 
}
echo $rev;

?>
</body>
</html>