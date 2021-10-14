<!DOCTYPE html>
<html>
<body>

<?php
/* variable to check */
$int = 122;

/* min value */
$min = 1;
/* max value */
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT,
    array("options" =>
                array(
                      "min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
echo "<br><br>";


















/* variable to check */
$int = "122.tr";

/* min value */
$min = 1;
/* max value */
$max = 200;

if (filter_var($int, FILTER_SANITIZE_NUMBER_INT,
    array("options" =>
                array(
                      "min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
?>
 

</body>
</html>
