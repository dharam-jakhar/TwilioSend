<?php 


require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "########"; //Use your sid
$token  = "####"; //Use your token
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("xxxxxxx", // to 
                           array( 
                               "from" => "xxxxxx",       
                               "body" => "Hello from Dharam Jakhar CS 643 Fall 2018" 
                           ) 
                  ); 
 
print($message->sid);