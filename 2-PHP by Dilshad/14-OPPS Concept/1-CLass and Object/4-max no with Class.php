<?php 


class maxnum{
	var $a;
	var $b;

	function value($par1,$par2){
		$this->a=$par1;
		$this->b=$par2;
	}

	function max(){
		if($this->a > $this->b){
			echo "max no $this->a ,  $this->b: ".$this->a."<br>";
		}else if($this->b > $this->a){
            echo "max no $this->a , $this->b:".$this->b."<br>";		}
	}
}
$maxnum=new maxnum;
$maxnum->value(12,43);
$maxnum->max();

$maxnum=new maxnum;
$maxnum->value(436,43);
$maxnum->max();
echo "<br><Br><Br><br><Br>";










class maxno{
	var $a;
	var $b;

	function value($par1,$par2){
		$this->a=$par1;
		$this->b=$par2;
			if($this->a > $this->b){
			echo "max no $this->a , $this->b--> ".$this->a."<br>";
		}else if($this->b > $this->a){
            echo "max no $this->a , $this->b-->".$this->b."<br>";		}
	}
	}

$maxnum=new maxno;
$maxnum->value(12,43);

$maxnum=new maxno;
$maxnum->value(436,43);
echo "<br><Br><Br><br><Br>";
?>