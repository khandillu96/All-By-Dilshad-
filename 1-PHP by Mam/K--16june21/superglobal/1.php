<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
 
 $a=24;
 $b=26;

 function add(){
 	$GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
 	
 	echo $GLOBALS['c'];
 }
 add();
echo $c;
?>
</body>
</html>