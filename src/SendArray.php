<?php 
require __DIR__ . '../vendor/autoload.php';
try{
	$api = new \Kavenegar\KavenegarApi("{ API Key } ");
	$senders = array("{ Sender Line #1}","{ Sender Line #2}");
	$receptors = array("{ Receptor #1 }","{ Receptor #2 }");
	$messages = array("{ Messages #1 }","{ Messages #2 }");
	$result = $api->SendArray($senders,$receptors,$messages);
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