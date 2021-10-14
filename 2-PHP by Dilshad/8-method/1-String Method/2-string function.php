<?php  




//addslashes(var,char)
$str1="Hello I Am 'dilshad khan'";
$str2="Hello I Am dilshad khan";
echo $str1."<br>";
echo addslashes($str1)."<br>";
echo addcslashes($str2,"da")."<br>";
echo addcslashes($str2,"a..d")."<br><br><br>";




//stripslashes(var,char)
$str3="hello i am \dilshad\ khan";
echo $str3."<br>";
echo stripslashes($str3)."<br><br><br>";




//htmlentities()
$str4="A 'quote' is <b>blod</b>";
echo $str4.'<br>';
echo htmlentities($str4)."<br><br>";

$str5='<a href="https://www.google.com">google bab website</a>';
echo $str5.'<br>';
echo htmlentities($str5)."<br><br>";


echo html_entity_decode($str5)."<br>";








/*
 addslashes()
 stripslashes()
 htmlentites()---htmlspeacialchara();


*/
?>