<!DOCTYPE html>
<?php
 // define variables and set to empty values

 $name=$website=$email=$comment=$gender="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){

 $name= test_input($_POST['name']);
 $website=test_input($_POST['website']);
 $email=test_input($_POST['email']);
 $comment=test_input($_POST['comment']);
 $gender=test_input($_POST['gender']);

 }


 
 function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data=strip_tags($data);
 $data = htmlspecialchars($data);
  return $data;

 }




 ?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		<h3>form validation</h3>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			<label>Enter Name</label><br>
			<input type="text" name="name">
			<br><br>


			<label>Enter Website</label><br>
			<input type="text" name="website"><br><br>

			<label>Enter email</label><br>
			<input type="email" name="email"><br><br>


			<label>Enter comment</label><br>
		    <textarea name="comment" rows="3" cols="30"></textarea><bR><br>
            

            <label>Gender</label>
            <input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other<br><br><br>

            <input type="submit" name="sumbit" value="submit">
		</form>
	</div>

 <?php

echo "<h2>your input</h2>";

 
 echo $name."<bR>";
 echo $website."<bR>";
 echo $email."<bR>";
 echo $comment."<bR>";
 echo $gender."<bR>";

  ?>

</body>
</html>