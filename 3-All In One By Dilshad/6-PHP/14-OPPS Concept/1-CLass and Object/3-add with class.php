<?php 

class Add{
	var $a;
	var $b;


	function setvalue($par1,$par2){
		$this->a=$par1;
		$this->b=$par2;
	}

	function addition(){
		$c=$this->a+$this->b;
		echo $c;
	}

}
$addition=new Add;
$addition->setvalue(100,100);
$addition-> addition();
echo "<br><Br><Br><br><Br>";












class Addition{
	var $a;
	var $b;


	function setvalue($par1,$par2){
		$this->a=$par1;
		$this->b=$par2;
		$c=$this->a+$this->b;
		echo $c;
	}

}
$addition=new Addition;
$addition->setvalue(101,100);

?>