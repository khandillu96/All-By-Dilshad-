<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
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
$physics->setTitle("Physics for High School");
$physics-> getprice();
$physics->getTitle();


$maths=new Books;
$maths-> setprice(2000);
$maths->setTitle("algebra");
$maths-> getprice();
$maths->getTitle();




$chemistry=new Books;
$chemistry->setprice(3000);
$chemistry->setTitle("chemistry");
$chemistry->getprice();
$chemistry->getTitle();




?>
</body>
</html>