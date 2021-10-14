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
  	#div1{
  		width: 60%;
  		color: white;
  		background-color: black;
  		border-radius: 10px;
  	}
  </style>
</head>
<body>


	<?php
    $a="";
    $b="";
    $c="";
    



   if(isset($_POST['submit'])){

      $a=$_POST['first'];
      $b=$_POST['second'];
   	$select=$_POST['arith'];

   	switch($select){
   		case "add":
   		$c=$a+$b;
         break;

         case "sub":
         $c=$a-$b;
         break;

         case "mul":
         $c=$a*$b;
         break;

         case "div":
         $c=$a/$b;
         break;

         case "pow":
         $c=$a**$b;
         break;
         
         case "mod":
         $c=$a%$b;
         break;

        
   	}
   }

    
 
	?>
<div class="container-fluid mt-3 py-3" id="div1">
	<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">

      <div class="form-group">
      	<label >Enter Value</label>
      	<input type="text" value="<?php echo $a?>" class="form-control" name="first" placeholder="Enter Value 1">
      </div>

       <div class="form-group">
      	<label >Enter Value</label>
      	<input type="text"  value="<?php echo $b?>"  class="form-control" name="second" placeholder="Enter Value 2">
      </div>



		<div class="form-group">
			<label>Select Days</label>
			<select class="form-control" name="arith">
				<option value="add">add</option>
				<option value="sub">Sub<option>
				<option value="mul">Mul</option>
				<option value="div">Div</option>
				<option value="pow">Pow</option>
				<option value="mod">Mod</option>
			 
			</select>
		</div>

		<div class="form-group">
			<label>Result</label>
			<input class="form-control" value="<?php echo $c;?>" type="text" placeholder="result">
		</div>

		<input type="submit" name="submit" value="submit" class="btn btn-primary  btn-block">
	</form>
</div>
</body>
</html>