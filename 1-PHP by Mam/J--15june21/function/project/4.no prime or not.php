<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

function prime($a){
     $prm=0;
	for($i=2;$i<$a;$i++){
		if($a%$i==0){
			$prm=1;
			break;
		}
	}


	if($prm==1){
		echo $a." not prime no";
	}
	else{
		echo $a." prime no";
	}
}
prime(13);

?>
</body>
</html>