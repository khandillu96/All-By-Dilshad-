<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

echo strlen("hello dilshad")."<br>";
echo str_word_count("Hello world!")."<br>";
echo strrev("Hello world!")."<br>";
echo strpos("Hello world!", "orld")."<br>";
echo str_replace("world", "Dolly", "Hello world!")."<br><br><Br>";











echo"<p><h2>constant<h2></P>";
//constant
//syntex-->  define(name, value, case-insensitive(recursive))

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING."<br>";


define("GREETINGS", "Normal constant!", true);
echo greetings."<br>";



//constant are global;
define("glb", "Global constant");
function myTest(){
    echo glb;
}
 myTest();

?>
</body>
</html>