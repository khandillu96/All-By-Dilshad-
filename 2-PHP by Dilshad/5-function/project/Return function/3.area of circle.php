<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

function area(){
	$a=3;
	return "area of circle ".$a*$a*3.14."<br><br>";
}
echo area();


function areaa($a,$b){

  return  "area of rectangle ".$a*$b;
   // return "area of circel ".$a*$a*3.14;  //will take 1st statment;
}
echo areaa(3,3)
?>
</body>
</html>