<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

 class maxno{
 	var $a;
 	var $b;


 	function __construct($x,$y){
 		$this->a=$x;
 		$this->b=$y;
 	}


 	function maximum(){

 		if(	$this->a>$this->b){
 		 echo	$this->a;
 		}
 		elseif ($this->a<$this->b) {
 			echo $this->b;
 		}
 	}
 }

$max=new maxno(50,30);
$max->maximum();
?>
</body>
</html>