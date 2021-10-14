<?php 

//fatehr for Son ,Doughter etc
//hierarchial inehritcance


class Father{         //parent class
	var $a;
	var $b;
	function getvalue($x,$y){
		$this->a=$x;
		$this->b=$y;
	}
}
class Son extends Father{
   function  add(){
   	echo $this->a+$this->b."<br>";
   }
}

class Daughter extends Father{
	function mul(){
		echo $this->a*$this->b."<br>";
	}
}


$objs=new Son;
$objs->getvalue(12,2);
$objs->add();


$objd=new Daughter;
$objd->getvalue(12,2);
$objd->mul();

?>