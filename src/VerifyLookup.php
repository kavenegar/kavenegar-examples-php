<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("Your API Key ");
	$receptor = "";
	$token = "";
	$token2 = "";
	$token3 = "";
	$template = "";
	$type = "";
	$result = $api->VerifyLookup($receptor,$token,$token2,$token3,$template);
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