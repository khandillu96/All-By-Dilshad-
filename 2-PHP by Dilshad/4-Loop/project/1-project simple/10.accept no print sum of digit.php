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
$a=1234;

while($a>=1)
{
	$rem=$a%10;
	$sum=$sum+$rem;
	$a=$a/10;
}
echo $sum;
echo "<br><br>";

$rem;
$sum=0;
$a=1234;

while($a>=1)
{
	$rem=$a%10;
	$sum=$sum+$rem;
	$a=$a/10;
	echo $sum."<br>";
}
echo $sum;

?>
</body>
</html>