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
</head>
<style type="text/css">
	#div1{
        background-color:cyan ;
        width: 60%;
        border-radius: 10px;
     
        font-size: 20px;
	}
</style>
<body>

<?php

$a;
$b;
$c;

$areaofcir;
$areaofrec;


if(isset($_POST['submit'])){

	$l=$_POST['avalue'];
	$b=$_POST['bvalue'];
	$r=$_POST['cvalue'];
    
    $a=$l;
    $b=$b;
    $c=$r;



	$areaofcir=3.14*$r*$r;
	$areaofrec=$l*$b;
}

?>
<div class="container-fluid mt-3 pb-3" id="div1"  >
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="form-group">
	<label>Enter L</label>
	<input type="text"  value="<?php echo $a;?>" name="avalue"class="form-control"placeholder="Enter First Value">
	</div>
    
    <div class="form-group">
	<label>Enter B</label>
	<input type="text" value="<?php echo $b;?>" name="bvalue"  class="form-control"placeholder="Enter Second Value">
	</div>

	 <div class="form-group">
	<label>Enter R</label>
	<input type="text" value="<?php echo $c;?>" name="cvalue"  class="form-control"placeholder="Enter Second Value">
	</div>


    <div class="form-group">
	<label>Area Of Ractangle</label>
	<input type="text" name="rec" value="<?php echo $areaofrec; ?>" class="form-control">
	</div>
    
    <div class="form-group">
	<label>Area of cirlce</label>
	<input type="text" name="cir" value="<?php echo $areaofcir; ?>" class="form-control">
	</div>


   
	<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">

</form>
</div>


</body>
</html>