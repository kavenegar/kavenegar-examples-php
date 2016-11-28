<?php 
require  '/vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use Kavenegar\Enums\ApiLogs;
use Kavenegar\Enums\General;

try{
	$api = new KavenegarApi("{ API Key }");
	$apilogs=ApiLogs::Justforfault;
	$dailyreport = General::Enabled;
	$debugmode =General::Enabled;
	$defaultsender = "{ Sender Line }";
	$mincreditalarm= 5000;
	$resendfailed= General::Enabled;
	$result = $api->AccountConfig($apilogs,$dailyreport,$debugmode,$defaultsender,$mincreditalarm,$resendfailed);
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
