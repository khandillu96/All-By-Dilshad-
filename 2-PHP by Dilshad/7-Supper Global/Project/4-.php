<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
// The addslashes() function returns a string with backslashes in front of predefined characters.
$str = addslashes('What does "yolo" mean?');
echo($str); 
?> 
<br><br>




<?php
// The stripslashes() function removes backslashes added by the addslashes() functio
echo stripslashes("Who\'s Peter Griffin?");
?>


</body>
</html>