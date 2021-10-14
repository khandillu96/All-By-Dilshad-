<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

function fun($fname){
	echo "$fname Refsnes.<br>";
}
fun("dilshad");
fun("Afsha");
echo '<br><br>';



function funn($fname,$year){
	echo $fname." passing year ".$year;
}
funn("Afsha","2020");
echo '<br><br>';



function setHeight($minheight = 50) {
    echo "The height is : ".$minheight." <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

?>
</body>
</html>