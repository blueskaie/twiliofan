<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TwilioRepository;
use Twilio\Twiml;

class TwilioController extends Controller
{
    public function __construct(Request $request)
    {
        $this->twilioRepository = new TwilioRepository();
    }

    public function reply(Request $request)
    {
        $this->twilioRepository->registerIncomming($request);

        if (strtolower($request->input('Body')) == 'free') {
            $replytext = $this->twilioRepository->getReplyMessage('auto_reply_free');
        } else {
            $replytext = $this->twilioRepository->getReplyMessage('auto_reply_default');
        }

        $response = new Twiml;
        $response->message($replytext);
        return $response;
    }
}




    // to send mms
    // $message = $response->message("Hello, This is Free product :)");
    // $message->media("https://www.drupal.org/files/project-images/10525524-twilio-logo.png");
