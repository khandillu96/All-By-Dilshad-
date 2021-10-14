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
	public $weight;


	function set_name($n){ // a public function (default
		$this->name=$n;
		echo $this->name;
	}

	protected  function set_color($n) { // a protected function
    $this->color = $n;
    	echo $this->color;

    }


    private function set_weight($n) { // a private function
    $this->weight = $n;
    echo $this->weight;
  }

}



$mango=new fruit();
$mango->set_name('Mango');  //ok
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>
</body>
</html>