<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class EmailController extends Controller
{
   public function index(){
        return view('send_email');
        }
       public function send(Request $request){
            $this->validate($request,[
                'name'     =>    'required',
                'email'    =>    'required|email',
                'message'  =>    'required'
            ]);
            $data =array(
                'name'  => $request->name,
                'message' => $request->message,
                
            );
            Mail::to($request->email)->send(new TestMail($data));
            return back()->with('success' ,'Thanks for contacting us!');
        }
}
