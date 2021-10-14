<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

function mypara($a,$b){
	for($i=$a;$i<=$b;$i++){
		echo $i." ";
	}
}
mypara(2,5);
echo"<br><bR>";


echo "even no: ";
function myeven($a,$b)
{
	for($i=$a;$i<=$b;$i++){
		if($i%2==0){
			echo $i." ";
		}
	}
}
myeven(2,6);
echo"<br><Br>";


function mymul($a,$b,$c){
	
	for($i=$a;$i<=$b;$i++){
		echo $c."*".$i."=".$c*$i."<br>";
	}
}
mymul(1,10,3);
echo"<br>";
?>
</body>
</html>