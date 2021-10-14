<?php 
echo "<b>We Get Value From 1-get.php Page</b><br><br>";

echo $_GET['fname']."<br><br>";
if(isset($_GET['submit'])){
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];

	echo $fname." ".$lname;
}


?>
