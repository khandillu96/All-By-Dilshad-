<?php 


$a="hi this is DILSHAD here DILSHAD from kurla";
$b="hello world";
$c="Dilshad Khan";


//length
echo strlen($b)."<br><br>";

//word_count
echo str_word_count($b)."<br><br>";


//count the word(repeated word show)
// substr_count(ver,word,strt,end)
echo substr_count($a, "DILSHAD")."<BR>";
echo substr_count($a, "DILSHAD",12)."<BR>";
echo substr_count($a, "DILSHAD",5,30)."<BR><br>";



//reverse---will show rev str
//strrev(vae/str)   str_suffle(var/str)
$str4="hello dilshad";
echo strrev($str4)."<br><br>";


// suffle  ---will show suffle str
// str_suffle(var/str)
echo str_shuffle($str4)."<br><br>";


//repeat --will show repeat str
// str_repeat(var/str);
echo str_repeat($str4,2)."<br><br>";



//lower upper case
echo strtoupper($a)."<br>";
echo strtolower($a)."<br>";
echo ucfirst($b)."<br>";
echo lcfirst($c)."<br>";
echo ucwords($b)."<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
















//replace ---will show strng with replace word
//str_replace("word",r_word,var)
$str2="i love php, i love php to!";
echo str_replace("php","python",$str2)."<br>";
echo str_ireplace("PHP","python",$str2)."<br>";

//substr_replace(var,r_word,str,end)
$str3="i love php , i love php to!";
echo substr_replace($str3,"python",12)."<br>";
echo substr_replace($str3,"python",2,8)."<br><br><br>";



//position
//strpos(var, word,strt) will show index no
$aa="i love php , i love php to!";
echo strpos($aa, "php")."<br>";
echo strpos($aa, "php",10)."<br>";
echo strrpos($aa, "php")."<br>";
echo stripos($aa, "PHP")."<br>";
echo strripos($aa, "PHP")."<br><br><br>";


//search ----will show string
//strstr(var,word,before_search(f/t))
$str="i am in  love with php , i love php to!";
echo strstr($str, "php")."<br>";
echo strstr($str, "php",true)."<br>";
echo stristr($str, "pHp")."<br>";
echo stristr($str, "PHP",true)."<br><br><br>";



//substring-----will give strng
//substr(var , str,total word)
$str1="i am in  love with php , i love php to!";
echo substr($str1, 12)."<br>";
echo substr($str1, 2,10)."<br><bR>";



//trim --will show trim str
//trim(string/var,"a") trim str end latter
$str5="a yaho baba";
echo $str5."<br>";
echo trim($str5)."<br>";
//echo trim($str5,'a ')."<Br>";

?>