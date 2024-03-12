<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;
use Nette\Utils\Random;

class SMSController extends Controller
{
    
public function sendSMS(){
    $details = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'number' => 'required|max:13|min:10'
    ]);
//  dd(request());
if(request('email_method') === 'text'){
// Set your app credentials
$username   = "yourUsername";
$apiKey     = "yourAPIKey";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+".request('number');
// dd($recipients);
//generate a unique PassID
$pass = rand(10,1000);
// Set your message
$message = "Hello " . request('name')."\n This is a text confirmation to the  AT event from  9am to 5pm at HillSide Chuka on 12-03-2024  \n Your PassID will be ".$pass."\n SEE YOU THEN!!";

// Set your shortCode or senderId
// $from       = "myShortCode or mySenderId";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
    
    ]);

    // print_r($result);
    // return response()->json($result);

    return view('confirmation');
 
} catch (\Exception $e) {
    return response()->json(['error'=>$e->getMessage()],500);
}
}else{
    return view('confirmationEmail');

}
}


}
