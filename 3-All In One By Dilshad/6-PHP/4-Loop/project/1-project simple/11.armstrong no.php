<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
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
$a=153;
$no=$a;

while($no>0)
{
	$rem=$no%10;
	$sum=$sum+$rem*$rem*$rem;
	$no=$no/10;

}
echo $sum."<br><Br>";


if($a==$sum)
{
echo "Armstrong";
}
else
{
echo "not Armstrong";
}


?>
</body>
 
</html>