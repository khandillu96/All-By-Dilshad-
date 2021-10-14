<?php

class myException extends Exception{
	function errormsg(){
        $error= "my Exception Error".$this->getMessage()."<br> Error on lne ".$this->getLine();
        return $error;
	}
}


function abc($c){
try {

  if($c<=0){
  	throw new Exception("Exception method:- enter valid no");
  }
    if($c==3){
  	throw new myException("Exception method:- no is three(3)");
  }
  else{ 
   $add= $c*10;
   echo $add."<br>";
  }

}catch(Exception $Err){
     echo $Err->getMessage()."<Br>";   
}catch(myException $Err){
     echo $Err->errormsg()."<Br>";   
}finally{
	echo" finally end<br><br>";
}
}
abc(2);
abc(4);
abc(0);
abc(3);
echo"<br><br><br><br><br><br>"; 






















































//double condtion can give n contion
function test($n){
try{
  if($n<=0){
    throw new Exception("exception :-enter valid no ");
  }

    if($n==3){
      throw new Exception('n=3 file will show 3');
    }
  else{
    $div=$n/2;
        echo $div;
  }

}catch(Exception $err){
    echo  $err->getMessage()."<br>";
    echo $err->getLine()."<br>";
    echo $err->getFile()."<br>";
} 
  finally{
  echo "<br>finaly end<br><br>";
}
}
test(3);
?>