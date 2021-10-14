<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

 echo "today is ".date('d/m/y')."<br>";
 echo "today is ".date('jS/M/Y')."<br>";
 echo "today is ".date('j/F/Y')."<br><br><br>";




 echo "Today is ".date("d.m.y"). "<br>";
 echo "Today is ".date("d-m-Y"). "<br>";
 echo "Today is ".date("l")."<br><br>";

echo "The time is ". date("h:i:sA");
 echo "<br><br>";


date_default_timezone_set("Asia/kolkata");
echo "the time is ".date("h:i:sa")."<br>";
echo "the time is ".date("H:i:sA");"<br>"
?>


<br><br>
2010-<?php echo date("Y");?>
echo "<br><br><br>"




<h2>mktime()</h2>

<?php
$d=mktime(11,45,59,12,31,2014);
echo "created date is ".date("Y-M-d  h:i:sA",$d)
?><br><br>

<h2>strtotime()</h2>
<?php
$d=strtotime(" April 15 2014 10:30:12pm ");
echo "created date is ".date("y-m-d h:i:sa",$d)."<br>";
echo "created date is ".date("Y-F-d h:i:sa",$d)."<br><br>";


$d=strtotime("tomorrow");
date_default_timezone_set("Asia/kolkata");
echo date("Y-F-d l H:i:sA",$d)."<br>";


$nextsat=strtotime("+1 Saturday");
date_default_timezone_set("Asia/kolkata");
echo "next satureday date will be ".date("d/F/Y",$nextsat)."<br>";


$nextmonth=strtotime("+3 month ,+2 year,+3 day");
date_default_timezone_set("Asia/kolkata");
echo "next satureday date will be ".date("d/F/Y H:i:sA",$nextmonth);
?>
<br><br><br>

<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);
while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 weeks", $startdate);
}
?>
<br><br><br>

<?php

var_dump(checkdate(12, 31, -400));
echo "<br>";

var_dump(checkdate(2,29,2004));
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("40day"));
echo date_format($date,"Y-m-d")."<br>";

$date=date_create("2013-03-15");
echo date_format($date,"m/Y/d");

?>


</body>
</html>