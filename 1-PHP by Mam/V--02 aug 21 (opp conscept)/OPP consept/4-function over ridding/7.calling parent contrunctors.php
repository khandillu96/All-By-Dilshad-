<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
 class Name{
 	 var $_firstName;
     var $_lastName;


     function Name($first_name, $last_name) {
     $this->_firstName = $first_name;
     $this->_lastName = $last_name;
   }


   function tostring(){
   	return($this->_lastName. " , ".$this->_firstName);
   }
}


   class Namesub1 extends Name{
   	var $_middleintial;



   	function Namesub1($first_name, $middle_initial, $last_name){
   		Name::Name($first_name, $last_name);
   		  $this->_middleintial = $middle_initial;
   	
   }

   function tostring(){
   	return (Name::tostring() ." ".$this->_middleintial);
   }
 }



$newname= new Namesub1("asd","sdjsj","dhd");
echo $newname->tostring();
?>
</body>
</html>