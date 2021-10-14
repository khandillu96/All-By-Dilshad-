
<?php  

class father{
     var $a;
     var $b;
	function value($a,$b){
		$this->a=$a;
		$this->b=$b;
	}
}


class son extends Father{

	  function display(){
	  	$d= $this->a+$this->b;
	  	echo $d;
	  }
}

class gson extends son{
	var $c;
	function display1($aa){
		$this->c=$aa;
     echo $this->c+ $this->a+$this->b;;
	}
}

$add=new gson;
$add->value(1,4);
$add->display();
$add->display1(5);
	

?>