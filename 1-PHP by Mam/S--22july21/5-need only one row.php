<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> </title>
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
<?php
$id="";
$name="";
$dept="";
$salary="";


?>


<div class="jumbotron">
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="form-group">
			<label>Id:</label>
			<input type="text"   name="id" placeholder="Enter Your Id " class="form-control">
		</div>
     
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

  $sql = "select * from student where id=$a";
  $result=$conn->query($sql);

  
 if($result->num_rows>0){

  while($row=$result->fetch_assoc()){
  	$id=$row['id'];
    $name= $row['name'];
    $dept=$row['branch'];
    $salary=$row['salary'];
  }
}
else {
echo	"0 record found";
}

$conn->close();

}
?>

		<div class="form-group">
			<label>Name</label>
			<input type="text" value="<?php echo $name; ?>" name="name" placeholder="Enter Your Name" class="form-control">
		</div>
         

         <div class="form-group">
			<label>Dept</label>
			<input type="text" name="dept" placeholder="Enter Your Department" value="<?php echo $dept;?>" class="form-control">
		</div>


		<div class="form-group">
			<label>Salary</label>
			<input type="text" name="sal" placeholder="Enter Your Salary" value="<?php echo $salary?>" class="form-control">
		</div>
		<button type="submit" class=" btn btn-primary btn-block" name="submit"  >Submit</button>
      </form>
</div>




</body>
</html>