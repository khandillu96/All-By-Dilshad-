<?php

include 'dbcon.php';

if(isset($_POST['submit1'])){
 

 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $interests=$_POST['interests'];


 $insertadmission="INSERT INTO `admission`( `firstname`, `lastname`,`email`,`contact`,`interests`) VALUES ('$firstname','$lastname','$email','$contact','$interests')"; 


 	$query=mysqli_query($con, $insertadmission);
}


if(isset($_POST['submit2'])){
    $contactname=$_POST['contactname'];
    $contactno=$_POST['contactno'];
    $contactmessage=$_POST['contactmessage'];


 $insertcontactusform="INSERT INTO `contactus`(`name`,`contact`,`message`) VALUES('  $contactname','$contactno','$contactmessage')";

 $query=mysqli_query($con,$insertcontactusform);
 }
?>