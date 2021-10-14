<?php 

setcookie("wife","afsha khan",time()+(60),"/");
setcookie("husband","dilshad khan",time()+(600),"/");
echo $_COOKIE['wife']."<br>";
echo $_COOKIE['husband'];

?>