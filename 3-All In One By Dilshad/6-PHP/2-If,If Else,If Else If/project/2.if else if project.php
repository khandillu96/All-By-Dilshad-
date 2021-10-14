<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
 
 $per=65;

 if($per>=80 && $per<100){
 	echo " v v good ".$per;
 }

  else if($per>=60 && $per<80){
 	echo " v good ".$per;
 }

  else if($per>=45 && $per<60){
 	echo "  good ".$per;
 }

  else if($per>=35 && $per<45){
 	echo "fare ".$per;
 }
  else {
 	echo " enter per between 1 to 100 ";
 }
?>
</body>
</html>