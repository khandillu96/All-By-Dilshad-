<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 class car{
 	function car(){
 		$this->model="bmw";
 	}
 }

 $herbie=new car();
 echo $herbie->model;

?>
</body>
</html>