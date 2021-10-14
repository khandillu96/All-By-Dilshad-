<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


class fruit{

	public $name;
	public $color;


	public function __construct($name,$color){
		$this->name=$name;
		$this->color=$color;
	}


	public function intro(){
		echo "the fruit is ".$this->name. "and the color is ".$this->color;
	}

}

	class strawbarry extends fruit{
		public $weight;


	public function __construct($name,$color,$weight){
		$this->name=$name;
		$this->color=$color;
		$this->weight=$weight;
		
	}


	public function intro(){
			echo "the fruit is ".$this->name. "and the color is ".$this->color.", and the weight is ".$this->weight;
	}
	
}



$strawbarry=new strawbarry("strbarry","red","50gm");

$strawbarry->intro()
?>
</body>
</html>