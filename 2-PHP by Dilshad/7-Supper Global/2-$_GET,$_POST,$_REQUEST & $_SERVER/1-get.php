<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<P style="color: red;">Same Page Access--</p>
<?php 
if(isset($_GET['submit'])){
$a=$_GET['name'];
$b=$_GET['mobile'];
echo $a." ".$b;
}
?>
<form method="GET">
	name: <input type="text" name="name" ><br>
	mobile:<input type="tel" name="mobile"><br>
	<input type="submit" name="submit" value="submit">
</form>



<br><br><br>






<p style="color:red;">Another Page Access will through 2-access-get.php page</p>
<form method="GET" action="1.1-access-get.php">
	First Name: <input type="text" name="fname" ><br>
	Last Name:<input type="text" name="lname"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>