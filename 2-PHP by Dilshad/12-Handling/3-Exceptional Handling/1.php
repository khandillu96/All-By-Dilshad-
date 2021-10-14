<?php

$n=1;

if($n>1){
	$div= 2/$n;
	echo $div;
}else
{
	echo "enter valid no";
}

echo "<bR><br><br>";



echo"<h2>Try catch method</h2>";
$a=3;   //enter 0 see diffrence
try {

  if($a<=0){
  	throw new Exception("Exception method:- enter valid no");
  }
  else{
   $div= 43/$a;
   echo $div;
  }

}catch(Exception $Err){
     echo $Err->getMessage()."<Br>";
     echo $Err->getLine()."<Br>";
     echo $Err->getcode()."<Br>";   //no need to learn, just learn;
     echo $Err->getFile()."<Br>";
}
echo "<bR><br><br>";


$aa=1;
try{
   if($n>=2){
       $div=$n/3;
       echo $div;
   }else {
    throw new Exception("Exception method:- enter valid no");
   }

}catch(Exception $Err){
    echo $Err->getMessage()."<Br>";
}
echo "<bR><br><br>";







function xyz($b){
try {

  if($b<=0){
  	throw new Exception("Exception method:- enter valid no");
  }else{
   $add= $b+100;
   echo $add."<br>";
  }

}catch(Exception $Err){
     echo $Err->getMessage()."<Br>";
     echo"error in line no: ". $Err->getLine()."<Br>";
}
}
xyz(12);
xyz(0);
echo "<bR><br><br>";



function abc($c){
try {

  if($c<=0){
  	throw new Exception("Exception method:- enter valid no");
  }
  else{
   $add= $c*10;
   echo $add."<br>";
  }

}catch(Exception $Err){
     echo $Err->getMessage()."<Br>";   
}finally{
	echo" finally end<br>";
}
}
abc(12);
abc(0);




?>