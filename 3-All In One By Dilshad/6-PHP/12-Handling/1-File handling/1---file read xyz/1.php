<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

//readfile
//file_exists()
//copy();
//rename();
//unlink()--deleted;
//mkdir();
//mrdir();
//filesize();
//filetype();
//realpath();




//read
echo readfile("readme.txt")."<br><br>";  //way of wrt code

$myfile="readme.txt";
echo readfile($myfile)."<br><br>"; //ways wrt code

$myfilee= readfile("readme.txt");
echo $myfilee."<br><br>"; //ways wrt code




/*file_exists*/  echo "<h2><b>file_exists</b></h2>";
if(file_exists("readme.txt") ){
	echo readfile("readme.txt");
}else
{
	echo "does not file_exists";
}
echo"<br><Br><br>";



/*copy*/ echo "<h2><b>copy</b></h2>";
copy("readme.txt", "newfile.txt");
echo readfile("newfile.txt")."<br><Br>";



/*rename*/ echo "<h2><b>rename</b></h2>";
rename("newfile.txt","oldcopy.txt");
echo readfile("oldcopy.txt")."<br><Br>";



/*unlike*/ echo "<h2><b>unlink</b></h2>";
unlink("oldcopy.txt");


/*mkdir*/ echo "<h2><b>mkdir</b></h2>";
 //mkdir("make folder");


/*rmdir*/ echo "<h2><b>rmdir</b></h2>";
 rmdir("make folder")."<br><bR>";



/*filesizer*/ echo "<h2><b>filesizer</b></h2>";
echo filesize("xyz");


/*filetype*/ echo "<h2><b>filetype</b></h2>";
echo filetype("readme.txt")."<bR><br>";
mkdir("xyz");
echo filetype("xyz");



/*realpath*/ echo "<h2><b>realpath</b></h2>";
echo realpath("xyz");
?>
</body>
</html>