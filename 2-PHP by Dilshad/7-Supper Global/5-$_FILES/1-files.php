
<?php 
 //if (isset($_post['submit'])) can use
 if (isset($_FILES['image'])){
   

   //can remove
 	echo"<pre>";
 	print_r($_FILES)."<bR>";
 	echo "</pre>";


    //veribale
 	 $name=$_FILES['image']['name'];
 	 $size=$_FILES['image']['size'];
 	 $tmp_name=$_FILES['image']['tmp_name'];
 	 $type=$_FILES['image']['type'];

 	 if(move_uploaded_file($tmp_name,"images/".$name)){
            echo "<b>file uploade</b> ";
       }else{
	        echo "<b>file not uploaded</b>";
       }
 }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div>
	<form method="POST" action="" enctype="multipart/form-data">
		<label>Select file :-</label>
		<input type="file" name="image"><br><Br>

		<input type="submit" name="submit" value="upload file">
	</form>
</div>
</body>
</html>