<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
/* both past and future date time display use date_create:

>>

 date_create(time[yr-mnt-date hr:mnt:sec],timezone)---this object

 date_format(object,format)
*/
 echo "<h2>date_create</h2>";
$date=date_create("2023/03/12  15:12:03");
$format=date_format($date,"d/M/Y i:H:s l");
echo $format."<br>";


$dateee=date_create("2023/03/12  15:12:03",timezone_open("Asia/Kolkata"));
$formatt=date_format($dateee,"d/M/Y i:H:s l");
echo $formatt."<br><bR><Br><br>";




/*
date-add;
date_sub;
date_modify:
*/



//date_add
echo "<h2>date_create ,add, sub, mod.</h2>";
$dateadd=date_create("2023-12-23 23:45:59");
$dateaddd=date_add($dateadd,date_interval_create_from_date_string("5 days"));
$dateformatadd=date_format($dateaddd,"d/F/Y h:i:sA l");
echo"add date is  " .$dateformatadd."<br>";



//Date_sub
$datesub=date_create("2023/12/23 23:45:59");
date_sub($datesub,date_interval_create_from_date_string("5 days"));
$dateformatsub=date_format($datesub,"d/F/Y h:i:sA l");
echo"sub date is  " .$dateformatsub."<br>";


//Date_modify
$datemod=date_create("2023-12-23 23:45:59");
date_modify($datemod,"+3 days");//Years,month,days,hours,minutes,seconds can write any one of them
echo "date modify ".date_format($datemod,"d/F/Y h:i:sA l")."<br><Br>";







//date set
echo "<h2>date_create, set</h2>";
$dateset=date_create();
date_date_set($dateset,2021,11,15 );
$format=date_format($dateset,"d/M/Y h:i:s l");
echo $format."<br>";

$datesett=date_create( "12:45:59");
date_date_set($datesett,2021,9,15 );
echo date_format($datesett,"d/M/Y h:i:s l");
 

?>
</body>
</html>