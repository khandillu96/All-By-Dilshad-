<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
		button{
  		position: relative;
  		left: 50px;
  		width: 200px;
  	}
</style>

</head>
<body>
<?php 
 $max="";

 if(isset($_POST["submit"]))
{
  

  $nof=$_POST["first"];
  $nos=$_POST["second"];

  if($nof>$nos){
  	$max=$nof."is higer no";
  }
 if($nos>$nof){
  	$max=$nos. " is higer no";
}
}
?>

<div class="container">	
	<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="form-group">
      <label>Enter 1st no</label>
      <input type="text" class="form-control" id="first" placeholder="Enter NO" name="first">
    </div>

    <div class="form-group">
      <label>Enter 2nd no</label>
      <input type="text" class="form-control" id="second" placeholder="Enter NO" name="second">
    </div>



    <div class="form-group">
      <label>even/odd</label>
      <input type="text" class="form-control" id="eo" placeholder="total"  value="<?php echo $max;?>">
    </div>

    <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>