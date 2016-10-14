<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("{ API Key }");
	$apilogs=\Kavenegar\Enums\ApiLogs::Justforfault;
	$dailyreport = \Kavenegar\Enums\General::Enabled;
	$debugmode =\Kavenegar\Enums\General::Enabled;
	$defaultsender = "{ Sender Line }";
	$mincreditalarm= 5000;
	$resendfailed= \Kavenegar\Enums\General::Enabled;
	$result = $api->AccountConfig($apilogs,$dailyreport,$debugmode,$defaultsender,$mincreditalarm,$resendfailed);
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
