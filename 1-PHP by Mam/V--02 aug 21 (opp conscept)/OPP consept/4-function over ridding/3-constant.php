<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php


class xyz{
	const mno=1.7;



	function __construct(){
		echo self::mno;
	}
}

$abc=new xyz();

echo xyz::mno;
?>
</body>
</html>