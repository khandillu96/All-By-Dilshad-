<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 function display(){
 	static $x=0;
 	 echo $x;
 	 $x++;
 }
 display();
 echo"<br>";
 
 

 display();
 echo"<br>";

 display();

?>
</body>
</html>