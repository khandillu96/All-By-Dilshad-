<?php



echo "<h1>Check Date</h1>";




/*
 checkdate(month,date,year);
 date_diff(datetime1,datetime2,absolute)
*/


//checkdate
$checkdate=checkdate(12, 31, 2021);
$checkdatee=checkdate(12, 32, 2021);
echo $checkdate."<br>";
echo "false show nothing". $checkdatee." 0 <bR><br><br>";


//date_diff
$date1=date_create("2021-03-12");
$date2=date_create("2013-04-12");
$diff=date_diff($date1,$date2);//object

echo $diff->days."days"."<br>";






echo "<pre>";
print_r($diff);
echo "<pre>";


echo $diff->format("%r%a--- %m %h-- --%Y days");




?>