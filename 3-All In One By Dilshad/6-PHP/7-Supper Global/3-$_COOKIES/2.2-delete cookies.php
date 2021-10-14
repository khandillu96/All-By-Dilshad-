<?php

 echo " this  will be delete ".$_COOKIE['husband'];
setcookie('husband','',time()-60,"/");

?>