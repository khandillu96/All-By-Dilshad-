<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
    echo $x . " " . $x_value."<br>";     
}
echo "<br><br><br>";








$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
foreach($age as $x => $x_value) {
    echo $x . " " . $x_value."<br>";     
}
echo "<br><br><br>";





$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $x => $x_value) {
    echo $x . " " . $x_value."<br>";
      
}
echo "<br><br><br>";





$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
foreach($age as $x => $x_value) {
    echo $x . " " . $x_value."<br>";
      
}
?>

</body>
</html>