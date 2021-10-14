<?php 

Class cellphone{
	var $model="dilshad";
	function __construct(){ 
		echo "modal number :$this->model<br>";
	}
}
$samsung=new cellphone();
echo "<br><Br><Br><br><Br>";






class mobiles{
	var $model; 
	function  __construct($number){ 
		$this->model=$number;
		echo "modal number :$this->model<br>";
	}
}
$samsung=new mobiles('A31s');
echo "<br><Br><Br><br><Br>";







class Books{
 
 	var $title;
    var $price;

   function __construct($a,$b){
   	$this->title=$a;
   	$this->price=$b;
   }

   function display(){
   	echo $this->title;
   	echo $this->price;
   }

 }

 $physics= new Books("physics ",10);
 $physics->display();


 
?>