<?php 
require("../Kavenegar/KavenegarApi.php");
try{
	$api = new KavenegarApi("Your API Key");
	$startdate = (new DateTime('2015-07-1'))->getTimestamp();
	$enddate = (new DateTime('2015-07-30'))->getTimestamp();
	$sender = "Your Sender";
	$result = $api->SelectOutbox($startdate,$enddate,$sender);		
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