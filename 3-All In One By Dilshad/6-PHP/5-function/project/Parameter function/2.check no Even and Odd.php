<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
echo "<p><b>even odd ----</b></p>";
function aa($par1){
	if($par1%2==0){
		echo $par1." even no";
	}
	else {
		echo $par1." odd no";
	}
}
aa(13);
echo"<br><br><br>";

echo "<p><b>+ve -ve  ----</b></p>";

function pn($par1){
	if($par1>0){
		echo $par1." this is possitive no";
	}
	else if($par1<0){
		echo $par1." this is negative no";
	}
}
pn(-12);
echo"<Br><br><bR>";

echo "<p><b>merit----</b></p>";
function merit($percen){


	if($percen>=80 && $percen<=100 ){
		echo "v v goog";
	}
	else if($percen>=60 && $percen<80){
		echo "v goog";
	}
	else if($percen>=45 && $percen<60){
		echo "good";
	}
	else if($percen>35 && $percen<45){
		echo "fare not good";
	}
	else {
		echo "enter between 35 to 100";
	}

}
merit(45);

?>
</body>
</html>