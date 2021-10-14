<?php 
/*
fopen
fread/fwrite ----done in 1st part

  |
fclose
  |

fgets
fgetc
feof
  */



//fopen or read
$file=fopen("file.txt","r");
echo fread($file,10)."<br><br>";

echo fread($file,filesize("file.txt"))."<br><br>";
 fclose($file);









//fgets ---will print first  line of the file
$file=fopen("file.txt", "r");
echo fgets($file)."<br>";
echo fgets($file)."<br><br>";
fclose($file);


//fgetc --will print 1st latter of file;
$file=fopen("file.txt","r");
echo fgetc($file);
echo fgetc($file);
echo fgetc($file);
echo fgetc($file);
fclose($file);

 
/*foef */ echo "<p><b>feof---</b></p>";
$file=fopen("file.txt", "r");
while(! feof($file)){
	$line= fgets($file);
	echo $line."<br>";
}






?>