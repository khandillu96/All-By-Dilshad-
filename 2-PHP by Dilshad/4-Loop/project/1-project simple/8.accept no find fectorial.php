<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$a=1;
$b=10;
$fact=1;
for($i=$a; $i<=$b;$i++){
	echo $i." ";
	$fact=$fact*$i;
}
echo "=".$fact;

?>
</body>
</html>