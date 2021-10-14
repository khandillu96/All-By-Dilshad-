<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

class parentt{
	var $a;
	var $b;

	function getdata($x,$y){
		$this->a=$x;
		$this->b=$y;
	}

}

class child  extends parentt {


	function maxvalue(){
		 if($this->a>$this->b){
      	echo $this->a;
      }
       else if($this->b> $this->a)  {
       	echo $this->b;
       }
	}
}

$max12 = new child();
$max12->getdata(11100,1200);
$max12->maxvalue();

?>
</body>
</html>