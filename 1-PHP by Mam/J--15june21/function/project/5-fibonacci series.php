<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

function fibo($a)
{
  $x=0;
  $y=1;
  
  $a;
  while($a>0){
  	$z=$x+$y;
  	echo $z."<br>";


  	$x=$y;
  	$y=$z;

  	$a--;

  }
}
fibo(5);

?>
</body>
</html>