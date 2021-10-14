<?php  
  include 'conn.php';
 $from=$_POST['from'];


 if($from==="add-info"){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO `crud`( `username`, `password`) VALUES ('$username','$password')";

    $query=mysqli_query($conn, $sql);


    echo "data added";
 }



 if($from==="update-info"){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="update crud set password='$password' where username='$username'";
    $query=mysqli_query($conn,$sql);


   
    echo "data updated ";
}




 if($from==="delete-info"){

    $username=$_POST['username'];
  

    $sql="delete from crud where username='$username'";
    $query=mysqli_query($conn,$sql);


   
    echo "data deleted ";
}
?>