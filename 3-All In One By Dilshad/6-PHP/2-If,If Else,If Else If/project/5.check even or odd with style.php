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
  	  #one{
       width: 60%;
       background-color: darkred;
      color: white;
      font-size: 20px;
      border-radius: 10px;
  	 }
  </style>
</head>
<body>

	<?php
   
   $no="";
   $result="";

   if(isset($_POST['submit'])){

   	$no=$_POST['no'];


   	if($no%2==0){
   		$result=" This Is Even No" ;
   	}
   	else{
   		$result=" This Is Odd No";
   	}
   }



	?>
<div class="container-fluid mt-3 py-3" id="one">

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']  ?>">
	<div class="form-group">
		<label>Enter No</label>
		<input type="text" placeholder="Enter value" value="<?php echo $no ;?>" class="form-control" name="no" >
	</div>

	<div class="form-group">
		<label>Result</label>
		<input type="text" value="<?php echo $no.$result;?>" placeholder="Result Here" class="form-control" name="first" >
	</div>

	<input type="submit" value="submit" name="submit" class="btn btn-primary btn-block">
</form>

</div>
</body>
</html>