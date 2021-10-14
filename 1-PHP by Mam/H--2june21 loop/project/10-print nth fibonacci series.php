<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
 
 $a=0;
 $b=1;

 $n=7;

 while($n>0){
 	$c=$a+$b;
 	echo $c."<br>";


 	$a=$b;
 	$b=$c;

 	$n--;
 }

?>
</body>
</html>