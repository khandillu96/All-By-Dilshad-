<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
 //for loop
 for($a=1;$a<=5;$a++){
 	echo $a."<br>";
 }
 echo"<br><br>";



 //while loop
 $b=0;
 while($b<=5){
 	echo $b;
 	$b++;
 }
 echo "<br><br><br>";



//do while loop
 $b=0;
do{
 	echo $b."<br>";
 	$b++;
 }
  while($b<=5);
echo "<br><br>";



//special
	for($a=5;$a>=0;$a--){
  		echo $a;
  	}
echo "<Br><br><br>";



for($a=2;$a<=3*2;$a++){
    echo "hello world ".$a."<br>";
}
?>
</body>
</html>