<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

//local
function localvar(){
	$str="i love dilshad";
	echo"<p><i>$str</i></p?<br>";
}
localvar();
// localvar();//+1 TIME
echo"$str<br>  ";// str outside fnc show error




//global
$str1="i love iiht";
function globalvar(){
    echo $str1;  //str1 inside fnc show  error
}
globalvar();
echo "$str1 alot GLOBAL<Br><br>";








?>
</body>
</html>