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
$d=0;
$e=0;
 if(isset($_POST["submit"]))

 {
  $a=$_POST["english"];

  $b=$_POST["hindi"];

  $c=$_POST["marathi"];


   $d=$a+$b+$c;
   $e=$d/3;
  
 }
?>
<div class="container">
    <h1 style="color: green;"> AVERAGE AND TOTAL</h1>
<form    method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
      <label>ENGLISH</label>
      <input type="text" class="form-control" id="first" placeholder="Enter English Mark" name="english">
    </div>

    <div class="form-group">
      <label>HINDI</label>
      <input type="text" class="form-control" id="first" placeholder="Enter Hindi Marks" name="hindi">
    </div>

    <div class="form-group">
      <label>MARATHI</label>
      <input type="text" class="form-control" id="second" placeholder="Enter Marathi Marks" name="marathi">
    </div>
    


    <div class="form-group">
      <label>Total</label>
      <input type="text" class="form-control" id="add" placeholder="total" name="total" value="<?php echo $d;?>">
    </div>

    <div class="form-group">
      <label>Average </label>
      <input type="text" class="form-control" id="add" placeholder="ADDITION" name="add" value="<?php echo $e;?>">
    </div>

  
     <button type="submit" name="submit"  class="btn btn-primary">Submit</button>

</form>
</div>
