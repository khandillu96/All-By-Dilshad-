<?php 
$filename=$filesize=$filetmpname=$filetype=$err=$file="";
 if(isset($_POST['submit']))
{      

	$filename=$_FILES["file"]['name'];
	$filesize=$_FILES['file']['size'];
	$filetmpname=$_FILES['file']['tmp_name'];
	$filetype=$_FILES['file']['type'];
    
    if($filename){
         if(($filesize<=(1024*1024)) && ($filetype=="image/jpeg") || ($filesize=="image/jpg")){
         	move_uploaded_file($filetmpname,"file/".$filename);
         }
         else{
         	$err="fddf vjkdfs ffds";
         }
    }else{
    	$err="select file";
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
<form method="POST" enctype="multipart/form-data" action="#">
	name:<input type="file" name="file">
	<span style="color: red;"><?php echo  $err; ?></span>
     <br>


	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>