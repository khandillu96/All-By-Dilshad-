<?php 

 session_start();

 $_SESSION['favcar']="BMW";
 $_SESSION['favmovie']="3-idiot";


echo $_SESSION['favcar']."<br>";
echo $_SESSION['favmovie']."<br>";
?>