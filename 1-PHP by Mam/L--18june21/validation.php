<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$name=$email=$gender=$comment=$website="";

function test_input($data){
 $data =trim($data);
 $data=stripcslashes($data);
 $data=htmlspecialchars($data);
 return $data;
}




 
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  	$name=test_input($_POST["name"]);
  	$email=test_input($_POST["email"]);
  	$website=test_input($_POST["website"]);
  	$comment=test_input($_POST["comment"]);
  	$gender=test_input($_POST["gender"]);

  }

echo "<h2>your input</h2>";
echo $name;
echo "<br>";
echo $email;
echo"<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>

<h2>PHP FORM VALIDATION</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
	name:<input type="text" name="name"><br><br>
	email: <input type="email" name="email"><br><br>
	Website:<input type="text" name="website"><br><br>
	comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
	gender:<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="fale">Male
    <br><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>