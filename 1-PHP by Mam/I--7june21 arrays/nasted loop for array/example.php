<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php   
 for($no1=1;$no1<3;$no1++)
 {
 	echo "outer loop:<b> ".$no1."</b><br>";
 	for($no2=1;$no2<=3;$no2++){
 		echo"inner loop: " .$no2."<br>";
 	}
 }

?>
</body>
</html>