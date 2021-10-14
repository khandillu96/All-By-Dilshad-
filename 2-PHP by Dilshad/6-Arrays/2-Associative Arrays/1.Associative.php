<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

//way of writting associative array

//literal
$asso=["name"=>"dilsahd ","surname"=>" khan","class"=>"eletircal"];

foreach($asso as $key => $value){
	echo $key .":".$value."<br>";
}

echo "full name is: ".$asso["name"].$asso["surname"]."<br>";
echo"name is {$asso['name']}<bR><br><bR><br>"; //imp







 
//direct
$class["rahul"]="eletrical";
$class["sumit"]="php";
$class["dilshad"]="iiht";
foreach($class as $key => $value){
	echo $key .":".$value."<br>";
}
echo "<br>".$class["rahul"]."<br><bR><bR><br>";





//construtor
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $key => $value){
	echo $key .":".$value."<br>";
}
echo "peter is ".$age['Peter']." year old"."<br>";


?>


</body>
</html>