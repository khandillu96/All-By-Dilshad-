<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<p style="color:red;">REQUEST BY GET</p>

<?php 
if(isset($_GET['submit'])){
$a=$_REQUEST['name'];
$b=$_REQUEST['mobile'];
echo $a." ".$b;
}
?>
<form method="GET" action="#">
	name: <input type="text" name="name" ><br>
	mobile:<input type="tel" name="mobile"><br>
	<input type="submit" name="submit" value="submit">
</form>



<br><br><br>




<p style="color:blue;">REQUEST BY POST</p>
<?php 
if(isset($_POST['submit'])){
$a=$_REQUEST['name'];
$b=$_REQUEST['mobile'];
echo $a." ".$b;
}
?>
<form method="POST" action="#">
	name: <input type="text" name="name" ><br>
	mobile:<input type="tel" name="mobile"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>