<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("{ API Key }");
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
catch(\Kavenegar\Exceptions\ApiException $e){
	echo $e->errorMessage();
}
catch(\Kavenegar\Exceptions\HttpException $e){
	echo $e->errorMessage();
}