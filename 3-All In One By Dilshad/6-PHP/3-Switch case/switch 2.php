<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

 $a=5;
 $b=5;
 $c=0;
 $select="mod";


 switch($select){
 	case "add":
 	$c=$a+$b;
 	echo "Add ".$c;
 	break;

 	case "sub":
 	$c=$a-$b;
 	echo "Sub ".$c;
 	break;


 	case "mul":
 	$c=$a*$b;
 	echo "Mul ".$c;
 	break;


 	case "div":
 	$c=$a/$b;
 	echo "Div ".$c;
 	break;


 	case "pow":
 	$c=$a**$b;
 	echo "Pow ".$c;
 	break;

 	case "mod":
 	$c=$a%$b;
 	echo "Mod ".$c;
 	break;

 	default;
    echo "select proper operation";
 }

?>
</body>
</html>