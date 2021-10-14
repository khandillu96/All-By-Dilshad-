<?php
Class cellphone{
	var $model; //data member/property;
	function showmodel(){  //memeber function/ method 
		echo "modal number :$this->model<br>";
	}
}
$samsung=new cellphone;
$samsung->model="dilshad";
$samsung->showmodel();

$lg = new  cellphone;
$lg->model="khan";
$lg-> showmodel();


echo "<br><Br><br><Br>";



class mobile{
	var $model; //global valiable;
	function showmodel($number){
		global $model;
		$model=$number;
		echo "modal number :$model<br>";
	}

}
$samsung=new mobile;
$samsung->showmodel("M31s");
$lg = new mobile;
$lg-> showmodel("LG81");
echo "<br><Br><Br><br><Br>";







class mobiles{
	var $model; //global valiable;
	function showmodel($number){
		$this->model=$number;
		echo "modal number :$this->model<br>";
	}
}
$samsung=new mobiles;
$samsung->showmodel("M31s");
$lg = new mobiles;
$lg-> showmodel("LG81");
echo "<br><Br><Br><br><Br>";











 
?>