<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$fact=1;
$a=1;
$b=5;


for($i=$a;$i<=$b;$i++){
    echo $i.'<br>';
    $fact=$fact*$i;
}
echo $fact;

?>
</body>
</html>