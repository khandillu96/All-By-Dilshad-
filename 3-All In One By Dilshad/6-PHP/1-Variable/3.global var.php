<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$a=5;
$b=10;
 function supglb(){
     $GLOBALS['a']=$GLOBALS['a']+ $GLOBALS['b'];
     echo $GLOBALS["a"]."<br>";
 }
supglb();
supglb();
echo $GLOBALS["a"]."<br>";
echo $b."<br><br><br>";





function myTest(){
	static $x=0;
	echo $x."<br>";
	$x++;
}
myTest();
mytest();
mytest();
echo "break point<br><br><br>";


//advance local /global
$no1=15;
$no2=25;
function glbvar(){
  global $no1,$no2;
   $no1=$no1+$no2;
   echo $no1."<br>";
}
glbvar();
echo" $no1<br>";


$no=15;
function mytr(){
	global $no;
	echo $no." ";
	$no++;
}
mytr();
mytr();
mytr();
echo "<br>break point<br><br><br>";





$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>$txt1</h2>";
print "<h1>$txt2</h1>";
print  $x+$y;


?>
</body>
</html>