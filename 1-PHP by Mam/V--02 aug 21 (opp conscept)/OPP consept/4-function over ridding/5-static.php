<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
class foo{
	public static $my_name="foooo";

	public function staticvalue(){
		return self::$my_name;
	}
}


print foo::$my_name."\n";

$FOO= new foo();
print $FOO->staticvalue();
?>
</body>
</html>