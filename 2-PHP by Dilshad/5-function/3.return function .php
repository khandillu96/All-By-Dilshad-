<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  

function rfun(){
	$a=5;
	$b=5;
	$c=$a+$b;
	return $c;
}
$r=rfun();
echo $r."<br><br>"; 



function rtn($pa1){

	return $pa1;
}
echo rtn("khan");
?>
</body>
</html>