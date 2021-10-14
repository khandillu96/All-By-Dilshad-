<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$cars=array
 (array("valov",22,18),
  array("bmw",15,13),
  array("saab",5,2),
  array("land rover",17,15)
);
//echo $cars."<br><br>";//error
echo $cars[0][1]."<br>";
echo $cars[1][2]."<br><br>";


for($a=0;$a<4;$a++){
	for($b=0;$b<3;$b++){
		echo $cars[$a][$b]." ";
	}
 echo ":<br>";
}
echo "<br><br><br><br><br><br><br><br>";
 
























$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}



?>
</body>
</html>