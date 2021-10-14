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
  	.jumbotron {
  		margin: auto;
  		width: 50%;
  		background: lightcyan;
  	}
  </style>
</head>
<body>
<div class="jumbotron">
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="form-group">
			<label>Id:</label>
			<input type="text" name="id" placeholder="Enter Your Id " class="form-control">
		</div>

		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
		</div>
         

         <div class="form-group">
			<label>Branch</label>
			<input type="text" name="branch" placeholder="Enter Your Department" class="form-control">
		</div>


		<div class="form-group">
			<label>Salary</label>
			<input type="text" name="salary" placeholder="Enter Your Salary" class="form-control">
		</div>
		<button type="submit" class=" btn btn-primary btn-block" name="submit" >Submit</button>
      </form>


<?php

 if(isset($_POST["submit"]))
{
  $a=$_POST['id'];
  $b=$_POST['name'];
  $c=$_POST['branch'];
  $d=$_POST['salary'];


  $servername="localhost"; //servername
  $username="root";            //mysql root
  $password="";     
  $dbname="iiht";          //data base Name


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  



  $sql = "INSERT INTO student(id,name,branch,salary) VALUES ('$a', '$b', '$c','$d')";
  

  if ($conn->query($sql) === TRUE) {
    echo "<br>  New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>
</div>
</body>
</html>