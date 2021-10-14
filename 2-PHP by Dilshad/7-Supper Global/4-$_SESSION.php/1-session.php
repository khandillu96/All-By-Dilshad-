<?php

//create seesion;
session_start();
$_SESSION["favcolor"] = "blue";


//retrive(print) session
if(!isset($_SESSION['favcolor'])){
	echo "session is not set ";
}else{
	echo $_SESSION["favcolor"];
}

?>
</body>
</html>
 