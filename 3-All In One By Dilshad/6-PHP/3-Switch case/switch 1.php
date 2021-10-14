<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$days=3;

switch($days){
	case 0:
	echo $days." Today Is Sunday ";
	break;
    
    case 1:
	echo $days." Today Is Monday";
	break;

	case 2:
	echo $days." Today is Tuesday";
	break;

	case 3:
	echo $days." Today Is Wednesday";
	break;


	case 4:
	echo $days." Today Is Thusday ";
	break;

	case 5:
	echo $days." Today Is Friday ";
	break;

	case 6:
	echo $days." Today Is Saturday ";
	break;

	default:
	echo" Enter 1 to 6";
}



?>
</body>
</html>