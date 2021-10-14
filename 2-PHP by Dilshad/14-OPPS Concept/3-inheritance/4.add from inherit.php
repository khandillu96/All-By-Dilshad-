<?php 

class dilshad{
	var $a;
	var $b;

	function getvalue($x,$y){
		$this->a=$x;
		$this->b=$y;
	}
}


class afsha extends dilshad{
	var $c;

	function add($z){
		$this->c=$z;
        $sum=$this->a+$this->b+$this->c;
        echo "sum $this->a+$this->b+$this->c = ".$sum;
	}
}

$love= new afsha;
$love->getvalue(12,443);
$love->add(12);


echo "<Br><br><Br><br>";


class dilshadd{
	var $aa;
	var $bb;

	function __construct($xx,$yy){
		$this->aa=$xx;
		$this->bb=$yy;
	}
}


class afshaa extends dilshadd{
	var $cc;

	function add($zz){
		$this->cc=$zz;
        $summ=$this->a+$this->b+$this->c;
        echo "sum $this->a+$this->bb+$this->cc = ".$summ;
	}
}

$lovee= new afshaa (12,443);
$love->add(12);


?>