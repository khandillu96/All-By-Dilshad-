<?php
/*

1-protected property or method can be accessed only within same calss.
2-protected property or method cannot be accessed out side the calss or object.
3-in inheritance ,child class can acess parent's or grandparent  protected property or mehod.

*/




// 1
/*
class Father{  //will run
	protected $a;
	public function display(){
		$this->a=30;
		echo "parent function:  $this->a";
	}
}
$obj=new father; 
$obj->display();
*/




// 2
/* 
class Father{ //Error
	protected $a;
	public function display(){
		echo "parent function  $this->a";
	}
}
$obj=new father;
$obj->a=30;
$obj->display();
*/






//   3

class Father{ //will run:  this is diff private n protected
	protected $a=20;
}

class Son extends Father {
	public function show(){
		echo $this->a;
	}
} 

$obj=new Son;
$obj->show();





?>