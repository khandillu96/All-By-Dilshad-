<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

function eo($a)
{
	if($a%2==0){
		return $a." even no";
	}
	else {
		return $a."odd no";
	}
}
  echo eo(12);

?>
</body>
</html>