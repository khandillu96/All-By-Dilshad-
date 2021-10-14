<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$no=[21,43,5343,655];
rsort($no);
for($a=0;$a<count($no);$a++){
	echo $no[$a]."<bR>";
}
echo"<br><Br><br>";




$dir[0]=12;
$dir[1]=543;
$dir[2]=212;
$dir[3]=43;
rsort($dir);
for($b=0;$b<count($dir);$b++){
 echo $dir[$b]."<br>";
}
echo"<br><Br><br>";



$cars = array("Volvo", "BMW", "Toyota");
 rsort($cars);
 for($x=0; $x <count($cars); $x++) {
    echo $cars[$x]."<br>";
}

?>

</body>
</html>