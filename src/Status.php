<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("{ API Key }");
	$messageIds = array("{ MessageId #1 }","{ MessageId #2 }");
	$result = $api->Status($messageIds);
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