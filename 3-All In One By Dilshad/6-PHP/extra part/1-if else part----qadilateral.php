<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			text-transform: capitalize;
		}

		div{
			background: cyan;
			border-radius: 10px;
			padding: 10px;
			width: 50%;
			margin: auto;
		}

		div  form input{
           width: 250px;
           line-height: 20px;
           font-size: 18px;
           padding: 4px 10px;
           border-radius: 10px;
		}

		button{
			margin: auto;
			padding: 10px;
			width: 100px;
			background-color: green;
			color: white;
			border-radius: 10px;

		}
	</style>
</head>
<body>
<?php
$masg="";
if(isset($_POST["button"])){


 $a=$_POST['a'];
 $b=$_POST["b"];
 $c=$_POST["c"];


 if ($a==$b &&  $b==$c && $c==$a) {
 	$masg="this is eqilateral traingle";
 }
 
 else if ($a==$b || $b==$c || $c==$a) {
 	$masg="this is eqilateral isolater";
 }


 else{
$masg="this is eqilateral scaler";
 }

}



?>

<div>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 <label>Enter a</label><br>
	 <input type="text" name="a" placeholder="enter a"><br><br>

	 <label>Enter b</label><br>
	 <input type="text" name="b" placeholder="enter b"><br><br>

	 <label>enter c</label><br>
	 <input type="text" name="c" placeholder="enter c"><br><br>

	 <label>result</label><br>
	 <input type="text" name="result" placeholder="triangle" value="<?php echo $masg;?>"><br><br>


	 <button name="button">submit</button>
	</form>
</div>
</body>
</html>