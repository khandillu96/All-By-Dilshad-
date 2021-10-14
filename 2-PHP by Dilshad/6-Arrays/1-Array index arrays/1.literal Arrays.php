<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
echo "<h2>literal array</h2>";
//2
//1
//literal array in javascript
$arry=["dilshad","khan","faiyaz","ahmed"];
for($i=0;$i<=3;$i++){
	echo $arry[$i]."<br>";
}
echo "<br>";
foreach($arry as  $value){
	echo $value."<br>";
}
echo "<br><br>";


//literal array in javascript
$arryno=[12,12,54,24];
$arryno[4]=55;
   for($j=0;$j<count($arryno);$j++){
	echo $arryno[$j]."<br>";
}
echo "<br><br>";











echo "<h2>index array</h2>";
//2
//directly array in javascript
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota";

for($a=0;$a<count($cars);$a++){
	echo $cars[$a]."<br>";
}
echo "<br><br>";


echo $cars[1]."<br>";
echo $cars[2]."<br><br><br><br><br>";



echo "<h2> constructor array</h2>";
//3
//constructor array in javascript
$cars=array("volvoo","BMW","Toyota");
echo "i like ".$cars[0].", ".$cars[0]." and ".$cars[2];
echo "<br><br>";


//constructor array in javascript
$arrynum=array(12,12,54,24);
$arrynum[4]=55;
   for($j=0;$j<count($arrynum);$j++){
	echo $arrynum[$j]."<br>";
}
echo "<br><br>";



$no=array(5,2,4,5,6);
$sum=0;
for ($i=0;$i<count($no);$i++)
{
    $sum=$sum+$no[$i];
}
echo $sum;
?>
</script>
</body>
</html>