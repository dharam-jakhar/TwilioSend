<?php 


require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACbd13b2e21b954d260beda885c432bbd9"; 
$token  = "fb0e44a0fc7eaa1e80c797f891d30374"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+19173490168", // to 
                           array( 
                               "from" => "+18507064915",       
                               "body" => "Hello from Dharam Jakhar CS 643 Fall 2018" 
                           ) 
                  ); 
 
print($message->sid);