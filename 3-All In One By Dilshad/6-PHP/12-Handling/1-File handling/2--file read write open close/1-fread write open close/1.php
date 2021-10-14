<?php 
/*

fopen
fread/fwrite
close






mode---->>

open write  read  close

r=read only ,pointer at start;
r+=read/write, pointer at start;

W=write only,excisting arase,fill poinert start at strt fill,create fill if not exist;
W+=write/read ,excisting arase,fill poinert start at strt fill,create fill if not exist;

a=write only,excisting not arase,fill poinert start at end of d fill(append),create fill if not exist;
a+=write/read ,excisting not arase,fill poinert start at end of d fill(append),create fill if not exist;


x=create new fill ,write only,return false if exist;
x+=create new fill ,write/read ,return false if exist;
*/



//for read
/*
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);

*/




//for write
$file=fopen("welcoma.txt","w+");
 fwrite($file, "hjg ggggggggg thtttttt");
fclose($file);









//135 php yahobana on youtube;
?>
