<?php 



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