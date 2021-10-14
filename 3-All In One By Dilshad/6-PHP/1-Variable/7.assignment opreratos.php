<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

/* assignment operator (shorthsand off arithmatic operator)

=  : x=y;
+= : x+=y   ---- x=x+y;
-= : x-=y   ---- x=x-y;
*= : x*=y   ---- x=x*y:
/= : x/=y   ---- x=x/y;
**=: x**=y  ---- x=x**y;
%= : x%=y   ---- x=x%y;  */



$a=6;
$b=3;
$c=$a+$b;


echo $c."<br>";
echo $a+=$b; //$a=$a+$b;
echo "<br>";

echo $a-=$b; //$a=$a-$b;
echo "<br>";


echo $a*=$b; //$a=$a*$b;
echo "<br>";

echo $a/=$b; //$a=$a/$b;
echo "<br>";

echo $a**=$b; //$a=$a**$b;
echo "<br>";

echo $a%=$b; //$a=$a%$b;
echo "<br>";

?>
</body>
</html>