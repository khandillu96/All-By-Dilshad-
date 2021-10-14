<?php 
echo "<b>We POST Value From 3-POST.php Page</b><br><br>";

echo $_POST['fname']."<br><br>";

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];

	echo $fname." ".$lname;
}


?>