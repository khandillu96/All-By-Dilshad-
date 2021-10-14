<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

class add{
	var $a;
	var $b;



	function getdata($x,$y){
		$this->a=$x;
		$this->b=$y;

	
	} 


	function addition(){
			$c=$this->a+$this->b;
		    echo $c;
	}
}

$add1=new add;
$add1-> getdata(40,20);
$add1-> addition();


?>
</body>
</html>