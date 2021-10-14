<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$int="100";

if(!filter_var($int,FILTER_VALIDATE_INT)===false){
	echo"interger is valid";
}else{
	echo("interger is not valid ");
}
echo"<br><br>";


$inte="100";

if(!filter_var($inte,FILTER_VALIDATE_INT)===false){
	echo "valid";
}else{
echo"not valid";
}
echo"<br><br>";




$zero=0;
if (filter_var($int, FILTER_VALIDATE_INT) ===0|| !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo"<br><br>";



$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}echo"<br><br>";





$email="dilshadk321@gmail.com";
$email=filter_var($email,FILTER_SANITIZE_EMAIL);

if(filter_var($email,FILTER_VALIDATE_EMAIL)===true){
	echo("$email is a valid email address");
}
else {
  echo("$email is not a valid email address");
}

  echo"<br><br>";
?>

</body>
</html>