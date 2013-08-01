<?php
require 'app_tokens.php';
require 'tmhOAuth.php';

$connection = new tmhOAuth(array(
  'consumer_key' => $consumer_key,
  'consumer_secret' => $consumer_secret,
  'user_token' => $user_token,
  'user_secret' => $user_secret
  ));
  
  $connection ->request('GET', $connection ->url('1.1/users/show'),
  array('screen_name' => 'justinbieber'));
  
  $response_code = $connection->response['code'];
  
  $response_data = json_decode($connection->response['response'],true);
  
  if($response_code <> 200){
  	print "Error:$response_code\n";
  }
  print_r($response_data);
  ?>
?>