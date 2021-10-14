<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

/* date(time) format
 
1-hour
 h (01 to 12)
 H (00 to 23)
 g (0 to 12)
 G (0 to 23)


2-Minutes
  i(00 to 59)


3-Second
  s(00 to 59)


4-Meridiem
  a (am to pm)
  A (AM to PM)







e-coutry


*/


echo "Hour is ",date("h/H/g/G")."<br>";
echo "Minutes is ",date("i")."<br>";
echo "Second is ",date("s")."<br>";
echo "Merdiem is ",date("a/A")."<br><br><br><br><br>";


$hr=date("h");
$min=date("i");
$sec=date("s");
$mer=date("A");
$ctry=date("e");

echo "time is ".$hr.":".$min.":".$sec." ".$mer." ".$ctry."<br><br><br><br><br><br>";



date_default_timezone_set("Asia/Kolkata");

echo "<b>Today Time and Dates:</b>  ".date("d F Y")." <b>/</b> ".date('h:i:sA e');


?>
</body>
</html>