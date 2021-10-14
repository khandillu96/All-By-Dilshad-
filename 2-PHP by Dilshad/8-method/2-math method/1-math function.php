<?php


$a=1.6;
$b=19;
$c=3;
$max=max(12,43,3,43,32,45);
$min=min(12,53,34,35,3432);


echo ceil($a)."<Br>";
echo floor($a)."<Br>";
echo round($a)."<Br>";
echo abs(-6.3)."<br>";
echo $max."<br>";
echo $min."<br>";
echo sqrt(10)."<br>";
echo intdiv(15, 5)."<br>";
echo pow(2,5)."<br>";
echo rand()."<br>";  //mt_rand(same as rand)















echo "<br><Br><br><br><b>min max in arrays</b><br>";
$val=min(array(12,121,232,21));
echo $val."<br>";

$val1=max(array(12,121,232,21),array(12,121,123));
echo "<pre>";
print_r($val1);
echo "</pre>";




echo "<br><Br><br><br><b>random value advance</b><br>";
echo rand()."<br>"; 
echo rand(1,10)."<br>";
echo mt_rand()."<bR>";
echo mt_rand(20,30)."<bR>";
echo lcg_value()."<br>";
/*
1-ceil();
2-floor();
3-round();
4-abs();
5-max(x,x,x,x,x);
6-min(x,x,x,x,x);
7-sqrt();
8-intdiv();
9-pow();
10-rand();


*/


?>