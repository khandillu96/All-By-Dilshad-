<?php 

class max{
	var $a;
	var $b;
 function __construct($x,$y){
 	$this->a=$x;
 	$this->b=$y;
 }
 function display(){
 	echo "max no btw $this->a , $this->b:-- ";
 	if($this->a > $this->b){
 		echo $this->a."<br>";
 	}else if($this->b > $this->a){
 		echo $this->b."<br>";
 	}
 }
}
$max=new max(13,14);
$max->display();
echo "<br><Br><Br><br><Br>";











class maxx{
	var $a;
	var $b;
 function __construct($x,$y){
 	$this->a=$x;
 	$this->b=$y;
 	echo "max no btw $this->a , $this->b:-- ";
 	if($this->a > $this->b){
 		echo $this->a."<br>";
 	  }else if($this->b > $this->a){
 		echo $this->b."<br>";
 	}
}
}
$dilsahd=new maxx(13,14);
$kamran=new maxx(43,14);
 
?>