<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


//email
$email="dil()shadk3//21@gmail.com"; //  remove-> /,(),<>,space;
$emailsanitize=filter_var($email,FILTER_SANITIZE_EMAIL);
echo $emailsanitize."<br><br> ";


//float
$float="12.43jjhkk";//dispay float only
$floatsanitize=filter_var($float,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
echo $floatsanitize."<br><br> ";



//int
$int="dilshad 21.43 khan";//dispay int only
$intsanitize=filter_var($int,FILTER_SANITIZE_NUMBER_INT);
echo $intsanitize."<br><br> ";




//url
$url="https://www.  w3schools.com"; //  remove space ,not spl chars
$urlsanitize=filter_var($url,FILTER_SANITIZE_URL);
echo $urlsanitize."<br><br><br><br> ";


















//string
$str="<h3><i>dilshad</i></h3>";echo $str; //html tags remove
$strsanitize=filter_var($str,FILTER_SANITIZE_STRING);
echo $strsanitize."<br><br><br>";


$str = "<h1>Hello WorldÆØÅ!</h1>";echo $str;
// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr."<br><br><br><br><br>";


//quote
$quotes="dilsah'd \khan"; //add slash where-->'\ avilable
$quotessanitize=filter_var($quotes,FILTER_SANITIZE_MAGIC_QUOTES);
echo $quotessanitize."<br><br><br>";


//encoded
$encoded="dils'ah'd \khan<>"; // show encoded like %20
$encodedsanitize=filter_var($encoded,FILTER_SANITIZE_ENCODED);
echo $encodedsanitize."<br><br><br>";


//splchr 
$splchr="<h1>dilshad & khan</h1>"; // > , < ,& will convert in intities code and show in view source code.
$splchrsanitize=filter_var($splchr,FILTER_SANITIZE_SPECIAL_CHARS);
echo $splchrsanitize."<br><br><br>";


?>
</body>
</html>