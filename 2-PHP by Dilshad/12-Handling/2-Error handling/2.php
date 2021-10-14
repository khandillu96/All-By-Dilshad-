<?php
//error handler function
function abc($err, $errstr) {
  echo "[$err] $errstr";
}
 
//set error handler
set_error_handler("abc");

//trigger error
echo($test);
?>
