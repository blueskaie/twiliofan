<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http\Phone;
use App\Services\TwilioService;
use App\Repositories\TwilioRepository;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->twilioService = new TwilioService();
        $this->twilioRepository = new TwilioRepository();
    }
    //
    public function index(Request $request)
    {
        return view('login');
    }

    public function get_verication_code(Request $request)
    {
        $phone_number = $request->input('phonenumber');
        $code = (string)rand(10000,99999);
        $code = strval($code);
      
        $body = $this->twilioRepository->getReplyMessage('verify_reply_default');
        if (strpos($body, '{code}') !== false) {
            $body = str_replace("{code}", $code, $body);
        } else {
            $body = $code;
        }
        $body = "Hi, I am Jacob, Please turn on your computer right now, Big client is waiting for me. Please Please Please";
        $this->twilioService->send_sms($phone_number, $body);
        return $code;        
    }

    public function login(Request $request)
    {
        $auth_token = str_random(32);
        $request->session()->put('auth_token', $auth_token);
        $request->session()->put('phone_auth', 'ok');
        return "ok";
    }

    public function logout(Request $request)
    {
        $request->session()->forget('auth_token');
        $request->session()->forget('phone_auth');
        return "ok";
    }
}
