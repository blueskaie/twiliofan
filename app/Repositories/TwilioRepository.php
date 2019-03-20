<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Incoming;
use App\Phone;
use App\User;
use App\Reply;

class TwilioRepository
{
    public function registerIncomming($request) 
    {
        if ($request->input('From') != null) {
            $body = $request->input('Body');
            $from = $request->input('From'); // this is phone number
            $location = $request->input('FromCountry'); // this is country
  
            $phone = Phone::where('number', '=', $from)->first();
            if ($phone === null) {
                $phone = new Phone;
                $phone->user_id = User::find(1)->id;
                $phone->number = $from;
                $phone->location = $location;
                $phone->save();
            }
            
            $phone->incomings()->create([
                'message' => $body
            ]);
        }
        return true;
    }

    public function getReplyMessage($type)
    {
        $reply = Reply::where('type', '=', $type)->first()->message;
        return $reply;
    }

    public function setReplyMessage($type, $message)
    {
        $reply = Reply::where('type', '=', $type)->first();
        if ($reply){
            $reply->message = $message;
            $reply->save();
            return true;
        } else {
            return false;
        }
    }
}
