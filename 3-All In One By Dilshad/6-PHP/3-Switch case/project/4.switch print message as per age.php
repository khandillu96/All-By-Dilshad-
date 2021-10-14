<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$age=21;

switch(true){
	case ($age>=21 && $age<=30):
	echo "You Are Eligible";
	break;
   


    case ($age>=10 && $age<=20):
	echo "You Are Not Eligible";
	break;

	default:
	echo"Enter Valid Age";
    break;
} 

?>
</body>
</html>