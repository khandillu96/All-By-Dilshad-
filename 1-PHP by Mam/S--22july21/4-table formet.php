<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
</head>
<body>

<?php

 

  $servername="localhost"; //servername
  $username="root";            //mysql route
  $password="";     
  $dbname="iiht";          //data base Name


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  



  $sql = "select * from student";
  $result=$conn->query($sql);


  if($result->num_rows>0){

 echo "<table border=1><tr><th>Id</th><th>Name</th><th>branch</th><th>Salary</th></tr>";

  while($row=$result->fetch_assoc()){
  	echo"<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['branch']."</td><td>".$row['salary']."</td></tr>";
  }

 echo" </table>";

  }
  else{
  	echo "0 results";
  }





 

$conn->close();


?>

</div>
</body>
</html>