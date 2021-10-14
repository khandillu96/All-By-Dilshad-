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
     $day="";
    $result="";
   if(isset($_POST['submit'])){


   	$day=$_POST['days'];

   	switch($day){
   		case "0":
         $result=" It Is Sunday";
         break;

         case "1":
         $result=" It Is Monday";
         break;

         case "2":
         $result=" It Is Thusday";
         break;

         case "3":
         $result=" It Is Wednesday";
         break;

         case "4":
         $result=" It Is Thusday";
         break;
         
          case "5":
         $result=" It Is Friday";
         break;

          case "6":
         $result=" It Is Sunday";
         break;
   	}
   }

    
 
	?>
<div class="container-fluid mt-3 py-3" id="div1">
	<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
		<div class="form-group">
			<label>Select Days</label>
			<select class="form-control" name="days">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select>
		</div>

		<div class="form-group">
			<label>Result</label>
			<input class="form-control" value="<?php echo $day.$result;?>" type="text" placeholder="Result">
		</div>

		<input type="submit" name="submit" value="submit" class="btn btn-primary  btn-block">
	</form>
</div>
</body>
</html>