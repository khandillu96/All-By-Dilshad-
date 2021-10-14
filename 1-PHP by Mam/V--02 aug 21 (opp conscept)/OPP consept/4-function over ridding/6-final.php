<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

class baseclass{
	public function test(){
		echo "baseclass::test() called<br>";
	}


	final public function moretesting(){
		echo "BaseClass::moreTesting() called<br>";
	}
}


class childclass extends baseclass{
	public function moretesting(){
		echo "BaseClass::moreTesting() called<br>";
	}
}


$finalize= new childclass();
$finalize -> moretesting();
?>
</body>
</html>