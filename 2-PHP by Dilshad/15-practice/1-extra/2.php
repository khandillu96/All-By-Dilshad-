
<?php 
$name=$err=""; {

	$name=$_POST['A'];
	if(empty($name)){
		$err="please ente name";
	}else if(strlen($name)<6 || strlen($name)>20){
		$err="name shoud be beetwn 6 to 20";
	}
	else{
		$err=" ";
	}
}


?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		<h3>form validation</h3>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">  
			<label>Enter Name</label><br>
			<input type="text" name="A">
			  <span><?phph echo $err;?></span>
			<br><br>



            <input type="submit" name="pluse" value="submit">
		</form>
	</div>

	<?php 

 echo $name;

	?>
</body>
</html>
