<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		div
		{
			margin: auto;
			padding: 10px;
			width: 40%;
			background: gray;
			border-radius:10px ;
			color: white;
		}



	</style>
</head>
<body>

<?php
$a="";
$b="";
$c="";

if (isset($_POST["submit"]))

 {
	$a=$_POST['f'];
    $b=$_POST['s'];

    for($i=$a; $i<=$b  ; $i++) { 
    	$c.=$i." ";
    }
	


}

?>

<div>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label>enter 1st no</label><br>
	<input type="text" value="<?php echo $a;?>" name="f"><br><br>


	<label>enter 2nd no</label><br>
	<input type="text" name="s" value="<?php echo $b;?>"><br><br>
    

    <label>print</label><br>
	<input type="text" name="print" value="<?php echo $c;?>"><br><br>
    
    <button name="submit">submit</button>
</form>	
</div>
</body>
</html>