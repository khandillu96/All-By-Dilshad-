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
		#one{
			margin: auto;
			background-color: blue;
			width: 50%;
			border: 1px solid black;
			border-radius: 10px;
		}

		#one h3,form{
			text-align: center;
		}
        
        
              }
         input{
         	padding: 6px;
         	border-radius: 10px;	
         }

	</style>
</head>
<body>

<?php
 
 $d=0;
 $e=0;


 if(isset($_POST['submit'])){


   $a=$_POST["eng"];
   $b=$_POST["hin"];
   $c=$_POST["mar"];

   $d=$a+$b+$c;
   $e=$d/3;
 }


?>


<div id="one">
	<h3>Total and Average</h3>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label><b>English</b></label><br>
		<input type="text" name="eng" placeholder="English Marks"> <br><br>


		<label><b>Hindi</b></label><br>
		<input type="text" name="hin" placeholder="Hindi Marks"><br><br>


		<label><b>Marathi</b></label><br>
		<input type="text" name="mar" placeholder="Marathis Marks"><br><br>


		<label><b>Total</b></label><br>
		<input type="text" name="tot" placeholder="Total Marks" value="<?php echo $d?>"><br><br>

		<label><b>Average</b></label><br>
		<input type="text" name="avr" placeholder="Average Marks" value="<?php echo $e?>"><br><br>

		
		
     <button type="submit" name="submit"  class="btn btn-primary">Submit</button>

	</form>
</div>
</body>
</html>