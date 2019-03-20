<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incoming;
use App\Reply;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\TwilioRepository;
use App\Libraries\IncommingExport;
class AdminController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('phoneauth');
        $this->twilioRepository = new TwilioRepository();
    }
    //
    public function index(Request $request)
    {
        $incomings = Incoming::all();
        return view('admin.index', ["incomings"=>$incomings, 'tab'=>'dashboard']);
    }

    public function incommings(Request $request)
    {
        $incomings = Incoming::all();
        return view('admin.incomming', ["incomings"=>$incomings,'tab'=>'incommings']);
    }

    public function export_incommings_to_excel(Request $request)
    {
        return Excel::download(new IncommingExport, 'incomming_list.xlsx');
    }
    public function settings(Request $request)
    {
        $auto_reply_default     = $this->twilioRepository->getReplyMessage('auto_reply_default');
        $auto_reply_free        = $this->twilioRepository->getReplyMessage('auto_reply_free');
        $verify_reply_default   = $this->twilioRepository->getReplyMessage('verify_reply_default');

        return view('admin.setting', ['auto_reply_default'=>$auto_reply_default, 
                                    'auto_reply_free'=>$auto_reply_free, 
                                    'verify_reply_default'=>$verify_reply_default, 
                                    'tab'=>'settings']);
    }

    public function ajaxupdatesettings(Request $request)
    {
        $auto_reply_default     = $request->input('auto_reply_default');
        $auto_reply_free        = $request->input('auto_reply_free');
        $verify_reply_default   = $request->input('verify_reply_default');
    
        if ($auto_reply_default != null)  {$this->twilioRepository->setReplyMessage('auto_reply_default',  $auto_reply_default);}
        if ($auto_reply_free != null)     {$this->twilioRepository->setReplyMessage('auto_reply_free',     $auto_reply_free);}
        if ($verify_reply_default != null){$this->twilioRepository->setReplyMessage('verify_reply_default',$verify_reply_default);}

        return "ok";
    }
}
