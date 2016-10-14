<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("API-Key");
	$postalcode = "441585";
	$sender = "";
	$message = "خدمات پیام کوتاه کاوه نگار";
	$mcistartindex = "-1";
	$mcicount = "10";
	$mtnstartindex = "-1";
	$mtncount = "10";
	$date = (new DateTime('2015-07-30'))->getTimestamp();
	$result = $api->SendbyPostalCode($sender,$postalcode,$message,$mcistartindex,$mcicount,$mtnstartindex,$mtncount,$date=null);
	if($result){
		var_dump($result);
	}
}
catch(\Kavenegar\Exceptions\ApiException $e){
	echo $e->errorMessage();
}
catch(\Kavenegar\Exceptions\HttpException $e){
	echo $e->errorMessage();
}