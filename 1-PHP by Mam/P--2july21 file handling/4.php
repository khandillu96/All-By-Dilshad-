<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

 $myfile=fopen("sometext.txt","r") or die("file missing");
 //file end of the file
 while(!feof($myfile)){
 	echo fgets($myfile)."<br>";
 }

 fclose($myfile);
?>
</body>
</html>