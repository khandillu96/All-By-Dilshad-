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
        background-color:gray ;
        width: 70%;
        border-radius: 10px;
        color: white;
        font-size: 20px;
	}
</style>
<body>

<?php
$first="";
$second="";
$add="";
$sub="";
$mul="";
$div="";
$pow="";
$mod="";

if(isset($_POST['submit'])){

$a=$_POST['avalue'];
$b=$_POST['bvalue'];

$first =$a;
$second=$b;

$add=$a+$b;
$sub=$a-$b;
$mul=$a*$b;
$div=$a/$b;
$pow=$a**$b;
$mod=$a%$b;
}

?>
<div class="container-fluid mt-3" id="div1"  >
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="form-group">
	<label>Enter A</label>
	<input type="text" name="avalue" value="<?php echo $first;?>"  class="form-control"placeholder="Enter First Value">
	</div>
    
    <div class="form-group">
	<label>Enter B</label>
	<input type="text" name="bvalue" value="<?php echo $second;?>" class="form-control"placeholder="Enter Second Value">
	</div>


    <div class="form-group">
	<label>Add</label>
	<input type="text" name="add" value="<?php echo $add; ?>" class="form-control">
	</div>
    
    <div class="form-group">
	<label>Sub</label>
	<input type="text" name="sub" value="<?php echo $sub; ?>" class="form-control">
	</div>


    <div class="form-group">
	<label>Mul</label>
	<input type="text" name="mul" value="<?php echo $mul; ?>" class="form-control">
	</div>

	<div class="form-group">
	<label>Div</label>
	<input type="text" name="div" value="<?php echo $div; ?>" class="form-control">
	</div>

	<div class="form-group">
	<label>Pow</label>
	<input type="text" name="pow" value="<?php echo $pow; ?>" class="form-control">
	</div>

	<div class="form-group">
	<label>Mod</label>
	<input type="text" name="mod" value="<?php echo $mod; ?>" class="form-control">
	</div>


	<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">

</form>
</div>


</body>
</html>