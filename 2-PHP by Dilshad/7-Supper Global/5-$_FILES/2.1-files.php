<?php

echo "<pre>";
print_r($_FILES);
echo "<pre>";



if(isset($_POST['submit'])){
 $imgname=      $_FILES['file']['name'];
 $imgsize=      $_FILES['file']['size'];
 $imgtmp_name=  $_FILES['file']['tmp_name'];
 $imgtype=      $_FILES['file']['type'];
   
    if(is_uploaded_file($imgtmp_name)){
        if ($imgsize< 2097152) {
         	 if($imgtype=='image/jpeg'){
                if( move_uploaded_file($imgtmp_name,"images/".$imgname)){
                	echo "file uploaded sussecfully";
                }else{
                	echo "file upload fail";
                }
         	 }else{
         	 	echo "file type must  be 'jpeg'";
         	 }

         }else{
         	echo "file should be less then 2 mb";
         } 
    }else{
      echo "<b>no file selected</b>";
    }
}else{
	echo "please select file ";
}
?>