<?php 


//inheritance
class Father{         //parent class
	var $a;
	var $b;
	function getvalue($x,$y){
		$this->a=$x;
		$this->b=$y;
	}
}
class Son extends Father{
	function display(){
		echo "value of A: $this->a<br>";
		echo "value of B: $this->b<br>"; 
	}
}

$obj=new Son;
$obj->getvalue(12,32);
$obj->display();


echo "<br><br><br><br>";





class Father1{         //parent class
	var $a;
	var $b;
	function __construct($x,$y){
		$this->a=$x;
		$this->b=$y;
	}
}
class Son1 extends Father1{
	function display(){
		echo "value of A: $this->a<br>";
		echo "value of B: $this->b<br>"; 
	}
}

$obj1=new Son1(12,32);
 $obj1->display();
?>