<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#div1{
  		width: 70%;
  		background-color: black;
  		color: white;
  		border-radius: 10px;

  	}
  </style>
</head>
<body>
<?php
  $a="";
  $b="";
  $c="";
 $sum=0;
  if (isset($_POST['sumbit'])){
  	$a=$_POST['first'];
  	$b=$_POST['second'];


  	for($i=$a;$i<=$b;$i++){
  		 $sum=$sum+$i;
  }
  $c=$sum;
}

?>
<div class="container-fluid py-3 mt-3" id="div1">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

		<div class="form-group">
			<label>Enter No A</label>
			<input type="text" name="first" value="<?php echo $a;?>"  placeholder="Enter value " class="form-control">
		</div>

		<div class="form-group">
			<label>Enter No B</label>
			<input type="text" name="second" value="<?php echo $b;?>" placeholder="Enter value " class="form-control">
		</div>

		<div class="form-group">
			<label>Sum</label>
			<input type="text" name="r" placeholder="Result Will  Get Here" value="<?php echo $c;?>" class="form-control">
		</div>

		<input type="submit" name="sumbit" value="sumbit" class="btn btn-primary btn-block">
	</form>
</div>
</body>
</html>