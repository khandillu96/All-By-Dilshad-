<?php


class Books{
	var $price;
	var $title;


	 function setprice($par){
    	$this->price=$par;
    }
     function getprice(){
        echo $this->price."<br>";
    } 



    function setTitle($par){
    	$this->title=$par;
    }
    function getTitle(){
    	echo $this->title."<br>";
    }
}


$physics=new Books;
$physics-> setprice(1000);
$physics-> getprice();

$physics->settitle("Physics for High School");
$physics->gettitle();
echo "<br>";

$maths=new Books;
$maths-> setprice(2000);
$maths->setTitle("algebra");
$maths->getTitle();
$maths-> getprice();

?>