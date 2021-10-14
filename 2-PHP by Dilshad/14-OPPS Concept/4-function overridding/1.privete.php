<?php


/*

1-privete property or method can be accessed only within same calss.
2-privete property or method cannot be accessed out side the calss or object.
3-in inheritance ,child class can't acess parent's private property or mehod.

*/









// // 1
//  // will run
// class Father{
// 	private $a;
//     public  function display(){
//     	$this->a=30;
//      echo $this->a ;
//     }
// }   
// $obj=new Father;
// $obj->display();
// echo "<br><Br><Br><br><Br>";







//  2
//  //error
// class Father{
// 	private $a;
//     public  function display(){
//      echo $this->a;
//     }
// }
// $obj=new Father;
// $obj->a="10";
// $obj->display();
// echo "<br><Br><Br><br><Br>";






// //2.1
//  //will be error(bcoz method is equal to  privete)
// class Father{
// 	private $a;
//     private  function display(){
//     	$this->a=30;
//      echo $this->a ;
//     }
// }
// $obj=new Father;
// $obj->display();
// echo "<br><Br><Br><br><Br>";













//   3
/*
class Father{ //error
	private $a=20;
}

class Son extends Father {
	public function display(){
		echo $this->a;
	}
} 

$obj=new Son;
$obj->display();
*/


//3.1
 
class Father{ //wil run
	public $a=20;    //var $a=; if public remove;
}

class Son extends Father {
	public function display(){
		echo $this->a;
	}
} 

$obj=new Son;
$obj->display();







?>