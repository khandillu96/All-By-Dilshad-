 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 <?php

function myprint(){
	 for($i=0;$i<=5;$i++){
	 	echo $i."<br>";
	 }
}
myprint();
echo "<br>";



function para($para1,$para2){
	for($i=$para1;$i<=$para2;$i++){
		echo $i."<br>";
	}
}
para(1,6)



function abc(){
	for($i=0;$i<=5;$i++){
	 return $i."<br>";
	 }

}
echo abc();
 ?>
 </body>
 </html>