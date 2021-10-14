<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table ,th,td{
			border: 1px solid black;
			border-collapse:collapse ;
			apse
		}



		th,td{
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>filter name</td>
			<td>filter id</td>
		</tr>
	
<?php

foreach (filter_list() as $id => $filter) {
	echo "<tr><td>".$filter. "</td><td>".filter_id($filter)."</td><tr>";
}


?>
</table>
</body>
</html>