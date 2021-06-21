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

$message = $twilio->messages 
                  ->create("+19092946035", // to 
                           array(  
                               "messagingServiceSid" => "MG421c1574a624467f4e6b2165f45da2d2",      
                               "body" => "TEST SMS Twilio" 
                           ) 
                  ); 
 
print($message->sid);



/*

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['smessage']))
    $errors['smessage'] = 'Message is required.';


// return a response ===========================================================

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {

    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {

    // if there are no errors process our form, then return a message

    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
    
    
    $client->messages->create(
    // the number you'd like to send the message to
    //'+19092946035‬',
    $_POST['number'],
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => $_POST['cidnumber'],
        // the body of the text message you'd like to send
        //'body' => 'Hello Luexson!'
        'body' => $_POST['smessage']
    ]
    );

    
    
    //END FORM PROCESSING
    // show a message of success and provide a true success variable
    $data['success'] = true;
    $data['message'] = 'Sent!';
}

// return all our data to an AJAX call
echo json_encode($data);


*/
