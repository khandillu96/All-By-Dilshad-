<?php 





$arrfun=['dilshad','khan','afsha','shaikh'];
$arrkeyfun=array('fruits'=>array('orange','banana','apple'),
                  'vaggie'=>array('carot','collard','pea' ));
$a=array(array('p','h') ,array('m','n') );






/*count and size*/  echo "<b>count() sizeof():-</b><br>";

echo count($arrfun)."<br>";
echo count($arrkeyfun),"<br>";
echo count($arrkeyfun,1),"<br>";
echo count($arrkeyfun['fruits']),"<br>";
echo count($arrkeyfun['vaggie']),"<br>";
//sizeof
echo "<br>".sizeof($arrfun)."<br><br>";








echo "<br><br><br><br>";
/*in_arrays n array_search*/  echo "<b>in_arrays & array_search:-</b><br>";

//in_array  (in_array show 1/0 n array_search show index no)
echo "true one:- ".in_array("shaikh", $arrfun)."<br>";
echo "false zero:- ". in_array("dilshadd", $arrfun)."<br>";
echo "false one:- ". in_array(array('p','t'),$a,true)."<br>";
echo "true one:- ". in_array(array('p','h'),$a,true)."<br><br>";

echo "index no:- ".array_search("shaikh", $arrfun)."<br>";
echo "index no:- ". array_search("dilshad", $arrfun)."<br>";
echo "<br><br>";




/*replace*/  echo "<b>replace:-</b><br>";
$arrfun=['dilshad','afsha','shaikh','13ee14'];
$arrcolor=['orange','blue'];
$replace=array_replace($arrfun,$arrcolor);
foreach($replace as $value){
	echo $value."<br>";
}
echo "<br><br>";





/*array_sum */ echo "<b>array_sum-</b><br>";
$a=[1,3,2,3,4];
$b=['a'=>3,'b'=>5,"c"=>54];
echo array_sum($a)."<br>";
echo array_sum($b)."<br><br>";


/*array_product */ echo "<b>array_product-</b><br>";
echo array_product($a)."<br>";
echo array_product($b)."<br><br>";








/*array_fill (show in acc ary)*/ echo "<b>array_fill-</b><br>";
$c=["a","b","c","d","e"];
$fill=array_fill_keys($c, "ram");
 echo "<pre>";
 print_r($fill);
 echo "</pre><bR><Br><Br>";


$newfill=array_fill(3, 5, 'fill');
echo "<pre>";
 print_r($newfill);
 echo "</pre><bR><Br><Br>";




/*
 1)count() , sizeof();
 2)in_array(),array_seacrh();
 3)array_replace();
 4)array_sum();
 5)array_product();
 6)array_fill();



*/


?>