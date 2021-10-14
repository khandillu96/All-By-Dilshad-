<?php 

//array_values  only use with associative array (covert to direct arry)
/*array_values */ echo "<b>array_values:-</b><br>";
$arrfruit=['a'=>"orange",'b'=>"banana", 'c'=>"mango", 'd'=>'apple'];
 $arrvalues=array_values($arrfruit);
 foreach($arrvalues as $value){
 	echo $value." ";
 }
 echo "<pre>";
 print_r($arrvalues);
 echo "</pre><bR><Br><Br>";






//array_unique only use with accociative array 
 /*array_unique */ echo "<b>array_unique-</b><br>";
$arrfruit1=['a'=>"orange",'b'=>"banana", 'c'=>'orange','d' =>"grapes", ];
$unique=array_unique($arrfruit1);
 foreach($unique as $value){
 	echo $value." ";
 }
 echo "<pre>";
 print_r($unique);
 echo "</pre><bR><Br><Br>";












//arrays_column
 /*arrays_column */ echo "<b>arrays_column-</b><br>";
$languages = array(
     array(
        "first_release" => "1991", 
        "latest_release" => "3.8.0", 
        "designed_by" => "Guido van Rossum",  
    ),

  
     array(
        "first_release" => "1995", 
        "latest_release" => "7.3.11", 
        "designed_by" => "Rasmus Lerdorf",
    ),

      array(
        "first_release" => "19945", 
        "latest_release" => "7.3.1321", 
        "designed_by" => "Rasmus Lerffddorf",
    ),
);
  
 $newlan=array_column($languages, 'latest_release');
  echo "<pre>";
 print_r($newlan);
 echo "</pre>";                         
 $newlann=array_column($languages, 'latest_release','first_release');
  echo "<pre>";
 print_r($newlann);
 echo "</pre><bR><Br><Br>";






//array_cchunk (covert index arry to multidimention)
 /*arrays_chunk */ echo "<b>arrays_chunk-</b><br>";
 $arrchunk=['dilshad','khan','afsha','shaikh','noor','ansari'];
$chunk=array_chunk($arrchunk, 3);
 echo "<pre>";
 print_r($chunk);
 echo "</pre><bR><Br><Br>";
























 
?>