<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

/*comparision operator
==	:Is equal to 
===	:equal value and  equal data type	 
!=	:Not equal to	 
!==	:not equal value or not equal type
>	:Greater than 
>=	:Greater than or equal to	 
<	:Less than   
<=  :less than or equal to   */

// will show 1 for true 0(_) for false;
$a=10;
$b=5;


echo $a==$b;
echo" <b>equal value</b><br>";

echo $a===$b; //if false will show black
echo" <b>equal value and equal  data type</b><br>";

echo $a!=$b;
echo" <b>not equal value</b><br>";

echo $a!==$b;
echo" <b> not equal value or not equal type</b><br>";


echo $a>$b;
echo" <b>Greater than</b> <br>";


echo $a>=$b;
echo" <b>Greater than or equal to</b>	 <br>";


echo $a<$b;
echo" <b>less than</b>  <br>";

echo $a<=$b;
echo" <b>less than or equal to</b><br>";


?>
</body>
</html>