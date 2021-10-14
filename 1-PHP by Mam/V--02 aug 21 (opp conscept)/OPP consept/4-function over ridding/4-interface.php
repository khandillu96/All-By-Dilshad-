<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


interface animal{
	public function makesound();

}


class cat  implements animal{
 public function makesound(){
 	echo "meow";
 }
}

$animal=new cat();
$animal-> makesound();
?>
</body>
</html>