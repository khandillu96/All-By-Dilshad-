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

 class novel  extends Books  {
     var $publisher;
    


     function setpublisher($par){
        $this->publisher=$par;
     }

       function getpublisher(){
       echo $this->publisher."<br>";
     }

 }

//this is object below---
 $novel1=new novel();

 $novel1->setTitle("novels");
 $novel1->getTitle();

 $novel1->setprice(10);
 $novel1->getprice();


 $novel1->setpublisher("time of india");
 $novel1->getpublisher();


?>
</body>
</html>