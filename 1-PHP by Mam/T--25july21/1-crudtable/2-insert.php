<?php
 include '1-conn.php';

 if(isset($_POST['submit'])){

  $a=$_POST['username'];
  $b=$_POST['password'];


 	$sql="INSERT INTO `crud`( `username`, `password`) VALUES ('$a','$b')";



 	$query=mysqli_query($conn, $sql);

 }




?>

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
</head>
<body>
    <div class="container">
<div class="col-lg-6 m-auto ">
	<form method="post" class="mt-3">
		
    <div class="card">
    	<div class="card-header bg-dark">
    		<h1 class="text-white text-center"> insert operation</h1>
    	</div><br>

    	<label>Username</label>
    	<input type="text" name="username" placeholder="Enter your Username"  class="form-control"><br>

    	<label>Password</label>
    	<input type="text" name="password" placeholder="Enter your Password" class="form-control"><br>

    	<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
    </div>

	</form>
</div>
</div>
</body>
</html>