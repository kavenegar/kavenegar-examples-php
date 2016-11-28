<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("{ API Key }");
	$receptor = "{ Receptor }";
	$token = "";
	$token2 = "";
	$token3 = "";
	$template = "{ Template }";
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