
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  	#div1{
  		width: 60%;
  		border-radius: 10px;

  	}
  </style>
</head>
<body>
	<?php


     $result="";
     $fval;
     $sval;
     $a;$b;

     if(isset($_POST['submit'])){


     	$a=$_POST['A'];
     	$b=$_POST['B'];
     	$select =$_POST['select'];
        
        $fval=$a;
        $sval=$b;

  switch ($select) {
      	case 'add':
     	$result=$a+$b;
  		break;

  		case 'sub':
     	$result=$a-$b;
  		break;


  		case 'mul':
     	$result=$a*$b;
  		break;


  		case 'div':
     	$result=$a/$b;
  		break;


  		case 'pow':
     	$result=$a**$b;
  		break;



  		case 'mod':
     	$result=$a%$b;
  		break;
  	
 
  }





     }







	?>
<div class="container py-3 bg-primary " id="div1">
	<form method="post" action="#">
	<div class="form-group">
		<label>Enter A</label>
		<input type="text" class="form-control" value="<?php echo $fval;?>" name="A" placeholder="Enter value A">
	</div>

	<div class="form-group">
		<label>Enter B</label>
		<input type="text"  class="form-control" value="<?php echo $sval;?>" name="B" placeholder="Enter value B">
	</div>

	<div class="form-group">
		<label>Select Method</label>
		<select class="form-control"  name="select">
			<option value="add">ADD</option>
			<option value="sub">SUB</option>
			<option value="mul">MUL</option>
			<option value="div">DIV</option>
			<option value="pow">POW</option>
			<option value="mod">MOD</option>
		</select>
	</div>


    <div class="form-group">
		<label>Result</label>
		<input type="text" value="<?php echo $result ?>"  class="form-control" name="result" placeholder="See Result">
	</div>

    <input type="submit" name="submit" value="Submit" class="btn btn-block btn-danger">
	</form>
</div>
</body>
</html>