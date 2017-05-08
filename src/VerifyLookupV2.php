<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("");
	$receptor = "";
	$template = "";
	$type = "sms";//sms or call (or null (null equal to sms))
	$token = "";
	$token2 = "";
	$token3 = "";
	$token10 = "";
	$result = $api->VerifyLookup2($receptor,$template,$type,$token,$token2,$token3,$token10);
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