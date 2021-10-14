<!DOCTYPE html>
<?php
//creat cookie

$name="name";
$value="dilshad khan";

setcookie($name,$value,time()+(60*60),"/");

//retrive(print) cookies
if(!isset($_COOKIE[$name])){
	echo "cookie is not set ";
}else{
	echo $_COOKIE[$name];
}


 ?>
</body>
</html>