<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

class maxvalue{ 

	var $a;
	var $b;
	


	function getdata($x,$y){
         $this->a=$x;
         $this->b=$y;
       
	}

	

	function value(){
      if($this->a>$this->b){
      	echo $this->a;
      }
       else if($this->b> $this->a)  {
       	echo $this->b;
       }




	}

}


$max= new maxvalue;
$max->getdata(300,400);
$max->value();

?>
</body>
</html>