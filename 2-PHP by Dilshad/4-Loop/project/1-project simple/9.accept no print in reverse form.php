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
	$rev=$rev.$rem;
	$a=$a/10;
}
echo $rev;
echo "<br><br>";














$rem;
$rev='';
$a=1234;

while($a>=1)
{
	$rem=$a%10;
	$rev=$rev.$rem;
	$a=$a/10;
	echo $rev."<br>";
}
echo $rev;

?>
</body>
</html>