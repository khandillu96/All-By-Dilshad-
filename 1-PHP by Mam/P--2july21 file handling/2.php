<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>filehandling</title>
</head>
<body>
<?php
$myfile = fopen("sometext.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sometext.txt"));
fclose($myfile);
?>

</body>
</html>