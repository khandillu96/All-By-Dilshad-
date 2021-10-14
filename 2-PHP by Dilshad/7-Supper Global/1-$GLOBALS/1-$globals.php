<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$a=10;
 function supglb(){
 	$a=20;
 	echo $GLOBALS['a']."<br>";  //will prifer 1st value of same var name..
 	echo $a;
 }
supglb();
echo "<br><BR><br><br>";





$v1=20;
$v2=32;
function add(){
	 echo $GLOBALS['v3']=$GLOBALS['v2']+$GLOBALS['v1'];
}
add();

?>
</body>
</html>