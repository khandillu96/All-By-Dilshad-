<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


abstract class car{
	public $name;


	public function __construct($name){
		$this->name=$name;
	}

	abstract public function intro();
}


class volvo extends car{
	public function intro(){
		echo" bus". $this->name;
		}
	}

class audi extends car {
	public function intro(){
		echo"this is ". $this->name;
		}
}
$carname= new audi("audi car");
$carname->intro();
echo"<br>";


$busname=new volvo(" volvo");
$busname->intro();
?>
</body>
</html>