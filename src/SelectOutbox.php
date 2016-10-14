<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("{ API Key }");
	$startdate = (new DateTime('2015-07-1'))->getTimestamp();
	$enddate = (new DateTime('2015-07-30'))->getTimestamp();
	$defaultsender = "{ Sender Line }";
	$result = $api->SelectOutbox($startdate,$enddate,$sender);		
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