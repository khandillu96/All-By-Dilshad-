<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
//fgets is used to read single line from a file

$myfile=fopen("sometext.txt","r")or die("file missing");
 echo fgets($myfile);  //fgetc used for first single latter 
 fclose($myfile);
?>
</body>
</html>