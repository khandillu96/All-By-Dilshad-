<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

/*for past date n time display use mktime
mktime (hour.minute,second ,  month,date,year)

gmmktime(hour.minute,second  , month,date,year)
*/
 



//mktime
echo "<h2>mktime</h2>";
echo date("d/F/Y l", mktime(12,45,23,12,31,2023))."<br>";


$d=mktime(1, 54, 44, 12, 12, 2014);
echo "Created date is " . date("Y-F-d --  h:i:sa", $d)."<br><br><br>";



//gmmktime  (same as mk time)
echo "<h2>gmmktime</h2>";
echo date("d/F/Y l H:i:s", gmmktime(12,45,23,12,31,2003))."<br><br><br>";







//strtotime(hr,min,sec  month,date,year)
echo  "<h2>strtotime</h2>";
$d=strtotime("10:30:06pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";


date_default_timezone_set("Asia/Kolkata");

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa l", $d) . "<br>";

$e=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $e) . "<br>";

$w=strtotime("tomorrow");
echo date("Y-m-d h:i:sa l", $w) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa l", $d) . "<br>";

$d=strtotime("+3 Years");
echo date("Y-m-d h:i:sa", $d) . "<br>";
 
?>
</body>
</html>