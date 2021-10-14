<?php

$arrfun=['dilshad','khan','afsha','shaikh'];
$arrfun1=['dilshad','afsha','shaikh','13ee14'];
$arrcolor=['orange','blue'];
$arrbul=['lodha','bkc'];
$arrfruit=['a'=>"orange",'b'=>"banana", 'c'=>"grapes"];

$arrkeyfun=array('fruits'=>array('orange','banana','apple'),
                  'vaggie'=>array('carot','collard','pea' ));



/*sort */ echo "<b>Sort:-</b><br>";
sort($arrfun);
foreach($arrfun as $value){
	echo $value." ";
}
echo "<br>";

/*rsort */ echo "<b>rsort:-</b><br>";
rsort($arrfun);
foreach($arrfun as $value){
	echo $value." ";
}
echo "<br><br><br>";







/*POP */ echo "<b>Pop:-</b><br>";
array_pop($arrfun);
foreach($arrfun as $value){
	echo $value." ";
}
echo "<br>";

/*push */ echo "<b>Push:-</b><br>";
array_push($arrfun,"13ee14","bums");
foreach($arrfun as $value){
	echo $value." ";
}
echo "<br><br><br>";







/*Shift */ echo "<b>Shift:-</b><br>";
array_shift($arrfun);
foreach($arrfun as $value){
	echo $value." ";
}
echo "<br>";


/*UnShift*/  echo "<b>UnShift:-</b><br>";
array_unshift($arrfun,"bums");
foreach($arrfun as $value){
	echo $value." ";
}
echo "<br><br>";





/*merge*/  echo "<b>merge:-</b><br>";
$merge=array_merge($arrfun,$arrcolor);
foreach($merge as $value){
	echo $value." ";
}
echo "<br>";
$mergeassociative=array_merge($arrcolor,$arrfruit);
foreach($mergeassociative as $value){
	echo $value." ";
}
echo "<br><br>";

/*combine  kyes=> value*/  echo "<b>Combine:-</b><br>";
$combine=array_combine($arrbul,$arrcolor);
echo "<pre>";
print_r($combine);
echo "</pre>";
echo "<br><br>";





/*Slice*/  echo "<b>Slice:-</b><br>";
$arrfun1=['dilshad','afsha','shaikh','13ee14'];
$arrfruit1=['a'=>"orange",'b'=>"banana", 'c'=>"grapes",'d'=>"mango"];
$slice=array_slice($arrfun1, 1,3);
foreach($slice as $value){
	echo $value." ";
}
echo "<br>";


$slice=array_slice($arrfruit1, 1,2,true);
foreach($slice as $key => $value){
	echo $key." : " .$value." ";
}
echo "<pre>";
print_r($slice);
echo "</pre>";
echo "<br><br><br>";











/*Splice    echo "<b>Splice:-</b><br>";
$arrfun2=['shaikh','13ee14','dilshad','afsha'];
$fruits=["grapes","mango","orange","banana"];
$arrfruit2=['a'=>"orange",'b'=>"banana", 'c'=>"grapes",'d'=>"mango"];
 
$splice=array_splice($fruits, 2,1,$arrfun2);
print_r($splice);
echo "<br>";
*/ 
























/*1) sort();
  2) rsort();
  3) array_pop();
  4) array_push();
  5) array_shift();
  6) array_unshift();
  7) array_merge();
  8) array_combine();
  9) array_slice();
 10) array_splice();

  11)count() , sizeof();
  

*/

?>