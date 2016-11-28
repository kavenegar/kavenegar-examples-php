<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("{ API Key } ");
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
catch(ApiException $e){
	echo $e->errorMessage();
}
catch(HttpException $e){
	echo $e->errorMessage();
}