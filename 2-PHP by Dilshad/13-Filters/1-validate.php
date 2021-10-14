<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
//Email
$email='dilshadk321#gmail.com';  //dils hadk321@gmail.com'=invalid
$vemail=filter_var($email,FILTER_VALIDATE_EMAIL);

if($vemail){
	echo "<b>Email is valid:</b> ".$email;
}else{
	echo "<b>Email is not valid:</b> ".$email;
}
echo "<br><Br><Br><br>";







//float
$pricefloat=10.25;   //"jai"invalid,10=show valid 
$vpricefloat=filter_var($pricefloat,FILTER_VALIDATE_FLOAT);
if($vpricefloat){
	echo  " <b>price FLOAT is valid:</b> ".$pricefloat;
}else{
	echo " <b>price FLOAT is not valid:</b> ".$pricefloat;
}
echo "<br><Br><Br><br>";






//int
$priceint=10;   //10.12=show invalid 
$vpriceint=filter_var($priceint,FILTER_VALIDATE_INT);

if($vpriceint){
	echo  " <b>price INT is valid:</b> ".$priceint;
}else{
	echo " <b>price INT is not valid:</b> ".$priceint;
}
echo "<br><Br><Br><br>";




//boolean
$boolean=true;   //yes,on=valid, no,off=invalid 
$vboolean=filter_var($boolean,FILTER_VALIDATE_BOOLEAN);

if($vboolean){
	echo  " <b>boolean is valid:</b> ".$boolean;
}else{
	echo " <b>boolean is not valid:</b> ".$boolean;
}
echo "<br><Br><Br><br>";








echo"<h2>just learn, my be no need</h2>";
//ip
$ip="127.112.1.10";   //121.211.111.112=valid, 112.3222.432.3=invalid;
$vip=filter_var($ip,FILTER_VALIDATE_IP);

if($vip){
	echo  " <b>IP is valid:</b> ".$ip;
}else{
	echo " <b>IP is not valid:</b> ".$ip;
}
echo "<br><Br><Br><br>";





//url
$url="https://www.  w3schools.com";   //https://www.w3schools.com=valid, https://www.w3scho//6/6^^ols.com=invalid;

$vurl=filter_var($url,FILTER_VALIDATE_URL);

if($vurl){
	echo  " <b>URL is valid:</b> ".$url;
}else{
	echo " <b>URL is not valid:</b> ".$url;
}
echo "<br><Br><Br><br>";






//mac
$mac="FA-F9-DD-B2-5E-0D";   //FA-F9-DD-B2-5E,"dffdsfsdfd"=invalid ;

$vmac=filter_var($mac,FILTER_VALIDATE_MAC);

if($vmac){
	echo  " <b>MAC is valid:</b> ".$mac;
}else{
	echo " <b>MAC is not valid:</b> ".$mac;
}
echo "<br><Br><Br><br>";



?>
</body>
</html>