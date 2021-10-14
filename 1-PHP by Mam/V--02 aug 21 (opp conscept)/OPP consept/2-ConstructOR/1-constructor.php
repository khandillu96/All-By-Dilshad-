<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

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
</body>
</html>