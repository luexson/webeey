<?php

/* TWILIO SMS START*/
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC2a9d6e5d58e3fbedd8f03e2381d95ee2';
$token = 'bbdbef57e23036d87e3e80e5c55aaf23';
$client = new Client($sid, $token);


/* TWILIO SMS END*/

$message = $client->messages 
                  ->create("+19092946035", // to 
                           array(  
                               "messagingServiceSid" => "MG421c1574a624467f4e6b2165f45da2d2",      
                               "body" => "TEST SMS Twilio" 
                           ) 
                  ); 
 
print($message->sid);




