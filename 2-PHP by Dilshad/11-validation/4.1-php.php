<?php 

$fnameErr=$lnameErr=$cnameErr=$emailErr=$codeErr=$contactErr=$statesErr=$genderErr=	$hobbyErr=$genderErr=$usernameErr=$pw1Err=$pw2Err=$fileErr="";
$fname=$lname=$cname=$email=$code=$contact=$states=$hobby=$gender=	$username=$pw1=$pw2="";


 if(isset($_POST['submit'])){


	$fname=$_POST['fn'];
	if(empty($fname)){
		$fnameErr="please enter name";
	}else if(strlen($fname)<=6 || strlen($fname)>20){
		$fnameErr="please enter name between 6 to 20 latter";
	}else if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
		$fnameErr="enter alfa only or space";
	}else{
		$fnameErr="";
		 }



	$lname=$_POST['ln'];
	if(empty($lname)){
		$lnameErr="please Eenter name";
	}else if(strlen($lname)<=3 || strlen($lname)>10){
		$lnameErr="please enter name between 3 to 10 latter";
	}else if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
		$lnameErr="enter alfa only or space";
	}else{
		$lnameErr="";
	}
  

  $cname=$_POST['cn'];
	if(empty($cname)){
		$cnameErr="please enter name";
	}else if(strlen($cname)<=6 || strlen($cname)>20){
		$cnameErr="please enter name between 6 to 20 catter";
	}else if(!preg_match("/^[a-zA-Z ]*$/",$cname)){
		$cnameErr="enter alfab only or space";
	}else{
		$cnameErr="";
	}
  

  $email=$_POST['email'];
  if(empty($email)){
  	$emailErr="please enter Email Adrress";
  }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  		$emailErr="invalid  Email Adrress";
  }
  else{
  	$emailErr="";
  }





  $code=$_POST['phone'];
  if($code == "choose"){
  	$codeErr="please Select country code.";
  }else {
  		$codeErr="";
  }


  $contact=$_POST['contactno'];
  if(empty($contact)){
  $contactErr="please Enter contact no";
  }
  else if(!is_numeric($contact)){
  $contactErr="enter number  only";
  }
  else if(strlen($contact)!=10){
  $contactErr="enter number  only 10digits";
  }
  else {
  		$contactErr="";
  }


 $states=$_POST['states'];
 if($states=="chooseS"){
 	$statesErr="please Select states";
 } 

   
  $hobby=$_POST['hobby']; 
 if(empty($hobby)){
 	$hobbyErr="please Select hobby";
 }


 $gender=$_POST['gender'];
 if(empty($gender)){
 	$genderErr="please Select Gender";
 }



 $username=$_POST['username'];
 if(empty($username)){
 	$usernameErr="please enter username name";
 }else if(!preg_match("/^[a-zA-Z ][A-Za-z0-9]{5,21}$/",$username)){
 	$usernameErr="username invalid";
 }
 



 $pw1=$_POST['pw1'];
  if(!($pw1)){
 	$pw1Err="please Enter pw1";
 }else if(strlen($pw1)<8 || strlen($pw1)>20){
  $pw1Err ="password must be between 8 to 20 characters";
 }


 $pw2=$_POST['pw2'];
 if(empty($pw2)){
 	$pw2Err="please Enter pw2";
 }else if($pw1 != $pw2){
 	$pw2Err="password must be same as pw1";
 }
 

if($_FILES['file']['name']){
	if(($_FILES['file']['size']<=(1024*1024)) &&
	  ($_FILES['file']['type']=="image/jpeg") ||
	  ($_FILES['file']['type']=="image/png")){
	move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']);
}
else {
	$fileErr="please upload file jpeg and jpg formet size must be upto 1MB";
}
}else{
	$fileErr="please Select files";
}




}

?>