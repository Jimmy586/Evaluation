<?php
header('Content-type:application/json;charset=utf-8');
$seceretKey = '12345';
$headers = apache_request_headers();

if(isset($headers['auth_key'])){
	$api_key = $headers['auth_key'];
	if($api_key != $seceretKey) 
	{
		header('HTTP/1.1 401 Unauthorized');
		echo '[{"Error" : "Authorization Failed!"}]';
		exit;
	}
	else{
		if(isset($_POST['category']) && isset($_POST['tags'])){
			$category = $_POST['category'];
			$tags = $_POST['tags'];
			
			$Response = '[{';
			$Response .=	'"CompanyName": "<name>",';
			$Response .=	'"Type": "<type>",';
			$Response .=	'"Description": "<descriptin>",';
			$Response .=	'"OtherInfo": { "<JSON Key>" : "<JSON Value>"}';
			$Response .='}]';
			echo $Response;
		}
		else{
			header('HTTP/1.1 400 Bad Request');
			echo '[{"Error" : "Missing required parameters!"}]';
		}
	}
}
else{
	header('HTTP/1.1 403 Forbidden');
	echo '[{"Error" : "Auth key is missing!"}]';
}
?>