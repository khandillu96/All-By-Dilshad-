<?php 


//multi_level inheritance
class Father{         //parent class
	var $a;
	var $b;
	function getvalue($x,$y){
		$this->a=$x;
		$this->b=$y;
	}
}
class Son extends Father{ //child class
	var $c;
	var $sum;
	function sum($z){
		$this->c=$z;
		$this->sum=$this->a+$this->b+$this->c;
		echo  $this->sum."<Br><Br>";
	}
}
class Grandson extends Son{ //grandchild class

	function display(){
		echo "value of A: $this->a<br>";
		echo "value of B: $this->b<br>";
		echo "value of C: $this->c<br>";
        echo "value of Sum: $this->sum<br>";

	}
}


$obj=new Grandson;
$obj->getvalue(12,32);
$obj->sum(12);
$obj->display();



?>