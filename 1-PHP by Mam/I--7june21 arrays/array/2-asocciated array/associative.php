<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$data = array("name"=> "dilsahd","id"=>123, "qalification"=>"BE","addres"=>"kurla");

foreach ($data as $x => $x_value) {
	
	echo "key=".$x.",Value=".$x_value;
	echo "<br>";
}

?>
</body>
</html>