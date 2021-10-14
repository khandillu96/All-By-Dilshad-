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


 $color=$_POST['color'];

 switch ($color) {
 	case 'red':
 	$masg="you choosed red";
 	break;
 	


 	case "green":
 	$masg="you choosed green";
 	break;

 	case "blue":
 	$masg="you choosed blue";
 	break;
    


 	default:
 	$masg="you choosed out of box";
 		break;
 }

}



?>

<div>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 <label>Select color</label><br>
	 <input type="text" name="color" placeholder="color"><br><br>

	 <label>result</label><br>
	 <input type="text" name="result" placeholder="color" value="<?php echo $masg;?>"><br><br>


	 <button name="button">submit</button>
	</form>
</div>
</body>
</html>