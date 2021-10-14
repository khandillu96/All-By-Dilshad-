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


	function __construct($x,$y){
		$this->a=$x;
		$this->b=$y;
	}
    

    //distrcutor
	function __destruct(){

	}


	function addition(){
		$c=$this->a+$this->b;
		echo $c;
	}
}


$add1=new add(10,20);
$add1->addition();
 
?>
</body>
</html>