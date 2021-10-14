<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


$no=array(3,8,1,5,2);
for($i=0;$i<count($no);$i++)
{

	echo $no[$i];
	for($j=$i+1;$j<5;$j++){
		if($no[$i]>$no[$j])
		{
			$temp=$no[$i];
			$no[$i]=$no[$j];
			$no[$j]=$temp;
		}
	}
	echo $no[$i]."<br>";
}


?>
</body>
</html>