<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("{ API Key } ");
	$senders = array("{ Sender Line #1}","{ Sender Line #2}");
	$receptors = array("{ Receptor #1 }","{ Receptor #2 }");
	$messages = array("{ Messages #1 }","{ Messages #2 }");
	$result = $api->SendArray($senders,$receptors,$messages);
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