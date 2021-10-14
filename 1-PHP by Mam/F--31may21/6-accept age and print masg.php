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


 $age=$_POST['a'];
 



 if ($age>18 && $age<=39) {
 	$masg="ur r aligible";
 }
 
 else if ($age>40 && $age<=60) {
 	$masg="ur r experiance";
 }


 else{
$masg="enter proper";
 }

}



?>

<div>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 <label>Enter age</label><br>
	 <input type="text" name="a" placeholder="enter a"><br><br>


	 <label>result</label><br>
	 <input type="text" name="result" placeholder="triangle" value="<?php echo $masg;?>"><br><br>


	 <button name="button">submit</button>
	</form>
</div>
</body>
</html>