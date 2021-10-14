<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

function add(){
	$a=10;
	$b=12;

	return $a+$b;
}
$add=add();
echo $add."<br><br>";



function addpar($a,$b){
 return $a+$b."<br>";
}
echo addpar(2,5);
echo addpar(334,55);



?>
</body>
</html>