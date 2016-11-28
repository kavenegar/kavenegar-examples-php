<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("{ API Key }");
    $startdate=(new DateTime('2015-07-01'))->getTimestamp();
	$enddate = (new DateTime('2015-07-30'))->getTimestamp();
	$lineNumber="Your Sender";
	$isread=1;
	$result = $api->CountInbox($startdate,$enddate,$lineNumber,$isread);
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