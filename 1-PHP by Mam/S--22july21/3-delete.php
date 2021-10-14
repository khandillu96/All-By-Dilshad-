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
  	}
  </style>
</head>
<body>
<div class="jumbotron">
  <h1>delete</h1>
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="form-group">
			<label>Id:</label>
			<input type="text" name="id" placeholder="Enter Your Id " class="form-control">
		</div>

		
		<button type="submit" class=" btn btn-primary btn-block" name="submit" >Submit</button>
      </form>

<?php

 if(isset($_POST["submit"]))
{
  $a=$_POST['id'];
  


  $servername="localhost"; //servername
  $username="root";            //mysql route
  $password="";     
  $dbname="iiht";          //data base Name


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  



  $sql ="delete from student where id='$a' ";
  

  if ($conn->query($sql) === TRUE) {
    echo " record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>

</div>
</body>
</html>