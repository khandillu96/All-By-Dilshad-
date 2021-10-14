<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
/* date format 

1-date
  d (01 t0 31)
  j (1 to 31)
  S (st nd tr th)


2-month
  m (01 to 12)
  n (1 to 12)
  M (jan to dec)
  F (january to december)


3-year
  y (21)
  Y (2021)


4-day
  N (day count from monday(1 to 7))
  w (day count from sunday(1 to 7))
  D (mon to sun)
  l (monday to sunday) 



advance
z (1 to 365)
W (show week)
t (show days in  month)
L (leap year or not(0-1))
*/


echo "today date ".date("d/j/jS")."<br>";
echo"today month ".date("m/n/M/F")."<br>";
echo "today year ".date("y/Y")."<br>";
echo "today days ".date("N/w/D/l")."<br>";
echo"days of this  year ".date("z")."<br>";
echo "weeks of this year is ".date("W")."<br>";
echo "days of this month ".date("t")."<br>";
echo "is this leap year ".date("L")."<br><br><br>
<br><br>";


$day=date("l");
$date=date("j");
$month=date("M");
$year=date("Y");
$ctry=date("e");

echo " today is ".$day." ".$date."-".$month."-".$year." ".$ctry."<br><br><br><br><br>";




date_default_timezone_set("Asia/Kolkata");

echo "Today Time and Dates".date("d F Y")." ".date('h:i:sA');


?>
</body>
</html>