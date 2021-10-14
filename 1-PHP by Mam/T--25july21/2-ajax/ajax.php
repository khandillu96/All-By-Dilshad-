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
</head>
<body>
	<div class="container">
		
		  <div class="col-lg-12-">
		  	<br>
		  	<h1 class="text-center text-primary">dislplay table data</h1>
		  	<table class="table table-bordered table-striped table-hover">
		  		 
		  		<tr  class="text-center bg-dark text-white">
		  			<th>Id</th>
		  			<th>Username</th>
		  			<th>Password</th>
		  			<th>Delete</th>
		  			<th>Update</th>
		  		</tr>
		  		
         <?php

             include 'conn.php';

 	        $sql="select * from crud";

 	        $query=mysqli_query($conn, $sql);


 	        while($rel=mysqli_fetch_array($query)){

         ?>
		
		  	<tr class="text-center">
		  	<td><?php echo $rel['id'];?></td>
		  	<td><?php echo $rel['username'];?></td>
		  	<td><?php echo $rel['password'];?></td>

		  	<td><button class="btn btn-danger"><a href="updated.php?id=<?php echo $rel['id']; ?>" class="text-white";>Delete </a> </button> </td>


		  	<td><button class="btn btn-primary"><a href="5-update.php?id=<?php echo $rel['id'];?>" class="text-white">Updates </a></button></td>
		    </tr>
		 
      <?php 

           }
      ?>
		 
		  	</table>
		  </div>
	</div>

</body>
</html>

