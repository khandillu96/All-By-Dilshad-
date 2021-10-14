    <?php 


//email
$email="dilsh//adk()321(/) @gmail.com";
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
$vemail=filter_var($email,FILTER_VALIDATE_EMAIL);

if($vemail){
	echo "<b>Email is valid:</b> ".$email;
}else{
	echo "<b>Email is not valid:</b> ".$email;
}
echo "<br><Br>";



//float
$pricefloat="$$244332.559kjm";//
$pricefloat=filter_var($pricefloat,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
$vpricefloat=filter_var($pricefloat,FILTER_VALIDATE_FLOAT);

if($vpricefloat){
	echo "<b>pricefloat is valid:</b> ".$pricefloat;
}else{
	echo "<b>pricefloat is not valid:</b> ".$pricefloat;
}
echo "<br><Br>";





//int
$priceint="232.*559kjm";//remove all spl chr  n chars  
$priceint=filter_var($priceint,FILTER_SANITIZE_NUMBER_INT);
$vpriceint=filter_var($priceint,FILTER_VALIDATE_INT);

if($vpriceint){
	echo "<b>priceInt is valid:</b> ".$priceint;
}else{
	echo "<b>priceInt is not valid:</b> ".$priceint;
}
echo "<br><Br>";







//url
$url="https://www.  w3schools.com  ";//remove only sapce not special chars  
$url=filter_var($url,FILTER_SANITIZE_URL);
$vurl=filter_var($url,FILTER_VALIDATE_URL);

if($vurl){
	echo "<b>url is valid:</b> ".$url;
}else{
	echo "<b>url is not valid:</b> ".$url;
}
echo "<br><Br>";
 ?>