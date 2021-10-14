<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<P style="color: blue;">Same Page Access--</p>
<?php 
if(isset($_POST['submit'])){
$a=$_POST['name'];
$b=$_POST['mobile'];
echo $a." ".$b;
}
?>
<form method="POST" action="#">
	name: <input type="text" name="name" ><br>
	mobile:<input type="tel" name="mobile"><br>
	<input type="submit" name="submit" value="submit">
</form>
<br><br><br>






<p style="color:blue;">Another Page Access will through 4-access-post.php page</p>
<form method="POST" action="2.1-access-post.php">
	First Name: <input type="text" name="fname" ><br>
	Last Name:<input type="text" name="lname"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>