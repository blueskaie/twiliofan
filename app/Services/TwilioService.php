<?php

namespace App\Services;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioService
{    
    public function __construct()
    {
        $this->sid    = env('TWILIO_ACCOUNT_ID', 'test_id');
        $this->token  = env('TWILIO_TOKEN', 'test_token');
        $this->tw_number = env('TWILIO_NUMBER', 'test_number');
        $this->twilio = new Client($this->sid, $this->token);
    }
    
    public function send_sms($phonenumber, $body) 
    {
        try {
            $message = $this->twilio->messages->create($phonenumber, // to
                                    array("from" => $this->tw_number, "body" => $body)
                                );
            return $message->sid;
        }catch (Exception $e){
            return $e->getMessage();
        }
    }
}
