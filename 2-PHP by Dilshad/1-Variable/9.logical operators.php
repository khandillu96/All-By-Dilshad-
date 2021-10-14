<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

/* logical operator
 && : AND -- both condition true out of 2conditon  will print true.
 || : OR  -- any one condition true out of 2conditon will print true.
 !  : NOT -- if one condition true out of 1conditon will print faule.  */


$a=10;
$b=10;

echo ($a==$b && $a>=$b);
echo"<br>";

echo ($a>$b || $a<=$b);
echo"<br>";

echo (!($a>$b));
 
?>
</body>
</html>