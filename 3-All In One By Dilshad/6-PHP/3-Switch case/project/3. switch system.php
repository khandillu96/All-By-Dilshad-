<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$a=56;
$b=66;

switch (true) {
	  
	  case ($a==$b):
	  echo "Value A equal to Value B";
	  break;

	  case ($a!=$b):
	  echo "Value A Not equal to Value B";
	  break;

      case ($a>=$b):
	  echo "Value A Greate Then Value B";
	  break;

	  case ($a<=$b):
	  echo "Value A Less then Value B";
	  break;

      

	default:
		echo"enter valid no";
		break;
}


?>
</body>
</html>