<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.container{
  		width: 50%;
  		background-color: gray;
  		border: 1px solid black;
  		border-radius: 5px;
  		margin: auto;
  		padding: 10px;
  		color: white;
  	}

  	button{
  		position: relative;
  		left: 50px;
  		width: 200px;
  	}
  </style>
</head>
<body>
  <?php
$c=0;
$a=0;
$b=0;


 if(isset($_POST["submit"]))
{
$a=$_POST['firstvalue'];

$b=$_POST["secondvalue"];

$c=$a+$b;

//echo $c;
}


?>

<div class="container">
	<h1 style="color: green;"> ARITHMETIC</h1>
<form    method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-group">
      <label>ENTER FIRST VALUE</label>
      <input type="text" class="form-control" id="first" placeholder="Enter First Value" name="firstvalue">
    </div>

    <div class="form-group">
      <label>ENTER SECOND VALUE</label>
      <input type="text" class="form-control" id="second" placeholder="Enter Second Value" name="secondvalue">
    </div>
    

    <div class="form-group">
      <label>ADDITION OF FIRST AND SECOND VALUE</label>
      <input type="text" class="form-control" id="add" placeholder="ADDITION" name="add" value="<?php echo $c;?>">
    </div>
  
     <button type="submit" name="submit"  class="btn btn-primary">Submit</button>

</form>
</div>


</body>
</html>