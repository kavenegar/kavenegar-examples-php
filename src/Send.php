<?php 

require '../vendor/autoload.php';

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

try{
	$api = new KavenegarApi("{ API Key } ");
	$sender = "{ Sender Line }";
	$message = "{ Message }";
	$receptor = array("{ Receptor #1 }","{ Receptor #2 }");
	$result = $api->Send($sender,$receptor,$message);
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
