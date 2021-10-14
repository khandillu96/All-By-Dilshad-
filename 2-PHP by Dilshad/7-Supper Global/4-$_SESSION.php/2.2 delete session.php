<?php

session_start();

echo $_SESSION['favcar']."<br>";

session_unset();
session_destroy();
 
 echo " session has been delete";

?>