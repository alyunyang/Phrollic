<?php
	require 'app_tokens.php';
	require 'tmhOAuth.php';
	
	//OAuth connection to twitter
	$connection = new tmhOAuth(array(
		'consumer_key'=> $consumer_key,
		'consumer_secret'=> $consumer_secret,
		'user_token'=>$user_token,
		'user_secret'=>$user_secret
		));
		
		//sending tweet
	$code = $connection->request('POST',
		$connection ->url('1.1/statuses/update'),
		array('status'=>'Hello Twitter'));
	
	if($code == 200){
		print "Tweet sent";
	}else{
		print "Error:$code";
	}
?>