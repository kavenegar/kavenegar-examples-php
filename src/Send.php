<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("{ API Key } ");
	$sender = "{ Sender Line }";
	$message = "{ Message }";
	$receptor = array("{ Receptor #1 }","{ Receptor #2 }");
	$result = $api->Send($sender,$receptor,$message);
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
