<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$n=13;
$prime=0;
for($i=2;$i<$n;$i++)
{
	if($n%$i==0){
     $prime=1;
     break;

	}
}

if($prime==1){
	echo "not prime no";
}
else{
	echo "prime no";
}

 

?>
</body>
</html>