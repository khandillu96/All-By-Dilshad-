<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		div{
			margin: auto;
			padding: 10px;
			background: darkgrey;
			color: white;
			width: 40%;
			text-transform: capitalize;
			border-radius: 10px;
		}


		input{

			border-radius: 10px;
			line-height: 20px;
			font-size: 18px;
			padding: 6px 12px;
			width: 200px;
		}

		button{
			background: green;
			color: white;
			text-transform: capitalize;
			width: 150px;
			line-height: 20px;
			font-size: 18px;
			border-radius: 6px;
		}



	</style>
</head>
<body>


<?php


  if(isset($_POST["submit"])){
    $c;
  	$a=$_POST['first'];
  	$b=$_POST['second'];
   $sum=0;


   for($i=$a;$i<=$b;$i++){

   	   $sum=$sum+$i;
   }
    $c=$sum;

  }

?>



<div>


	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		
		<label>enter 1st value</label><br>
		<input type="text" name="first"><br><br>

		

		<label>enter 2nd value</label><br>
		<input type="text" name="second"><br><br>



		<label>sum of 1st 2nd value</label><br>
		<input type="text" name="sum" value="<?php echo $c; ?>"><br><br>

		<button type="submit" name="submit">clicke here</button>
	</form>
</div>
</body>
</html>