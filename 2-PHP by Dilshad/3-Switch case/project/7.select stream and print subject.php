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
	    

  	    .container{
  		width: 50%;
  		background-color: gray;
  		border: 1px solid black;
  		border-radius: 5px;
  		margin: auto;
  		padding: 10px;
  		color: white;
  	}

  	select option{
         width: 200px;
         display: block;
         border-radius:10px ;
  	}
		button{
  		position: relative;
  		left: 50px;
  		width: 200px;
  	}
</style>


</head>
<body>
<?php

$msg="";
 if(isset($_POST["submit"]))
 {
  $select=$_POST["strm"];
   
  switch ($select) {
  	case  ' Arts':
  	$msg="Sociology, Psychology,Government and Politics";
  	break;
  	

  	case"Commerce":
  	$msg="Environmental Studies, Financial Accounting";
    break;


    case"Science":
    $msg="bio,maths,physics etc.";
    break;

    default:
    $msg="select properly";


  }
 


  }
?>

<div class="container">	
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-group">
      <label>select stream</label>
      
      <select  name="strm">
      	<option value="Arts">Arts</option>
      	<option value="Commerce"> Commerce</option>
      	<option value="Science">Science</option>
      </select>
    </div>

    <div class="form-group">
      <label>subject name</label>
      <input type="text" class="form-control" id="eo" placeholder="subject name" name="evenodd" value="<?php echo $msg;?>">
    </div>

    <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>