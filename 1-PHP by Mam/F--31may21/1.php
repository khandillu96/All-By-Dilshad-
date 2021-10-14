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

$msg="";
 if(isset($_POST["submit"]))
 {
  $no=$_POST['no'];

  if($no > 0 ){
  	echo "<script> alert('this is positive') </script>  ";
   $msg="this is positive";
  }
else{
  		

  		$msg="This is Negative";
  	} 

  }
?>

<div class="container">	
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-group">
      <label>Enter no</label>
      <input type="text" class="form-control" id="first" placeholder="Enter NO" name="no">
    </div>

    <div class="form-group">
      <label>even/odd</label>
      <input type="text" class="form-control" id="eo" placeholder="total" name="evenodd" value="<?php echo $msg;?>">
    </div>

    <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>