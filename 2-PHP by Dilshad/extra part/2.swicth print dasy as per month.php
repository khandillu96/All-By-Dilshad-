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
	    *{
        text-transform: capitalize;
      }

  	    .container{
  		width: 50%;
  		background-color: red;
  		border: 1px solid black;
  		border-radius: 5px;
  		margin: auto;
  		padding: 10px;
  		color: white;
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
  $month=$_POST["month"];

  switch ( $month) {
  	case 'jan':
  	$msg="31 day in jan month";
  	break;
  	

  	case"feb":
  	$msg="28/29 days in feb month";
    break;


    case"mar":
    $msg=" 31 days in march month ";
    break;


     case"apr":
    $msg=" 30 days in april month ";
    break;

     case"may":
    $msg=" 31 days in may month ";
    break;

     case"jun":
    $msg=" 30 days in jun month ";
    break;


    

     case"jul":
    $msg=" 31 days in jul month ";
    break;

     case"aug":
    $msg=" 31 days in august month ";
    break;


     case"sep":
    $msg=" 30 days in september month ";
    break;

     case"oct":
    $msg=" 31 days in october month ";
    break;

     case"nov":
    $msg=" 30 days in november month ";
    break;

     case"dec":
    $msg=" 31 days in december month ";
    break;

    default:
    $msg="select properly";


  }
 


  }
?>

<div class="container">	
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-group">
      <label>choose month</label>
      <select name="month">
        <option value="jan">jan</option>
        <option value="feb">feb</option>
        <option value="mar">mar</option>
        <option value="apr">apr</option>
        <option value="may">may</option>
        <option value="jun">jun</option>
        <option value="jul">jul</option>
        <option value="aug">aug</option>
        <option value="sep">sep</option>
        <option value="oct">oct</option>
        <option value="nov">nov</option>
        <option value="dec">dec</option>
      </select>
    </div>

    <div class="form-group">
      <label>subject name</label>
      <input type="text" class="form-control" id="eo" placeholder="month" name="evenodd" value="<?php echo $msg;?>">
    </div>

    <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>