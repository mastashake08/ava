<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artisan;
use Mail;
use App\ContactRequest;
class AlertController extends Controller
{

    public function requestInfo(Request $request){
      $text = $request->first_name.' '.$request->last_name.' has requested more information. You can reach them at '. $request->email.' and '.$request->phone. '. COMMENTS: '.$request->comments;
      Mail::raw($text,function($message){
        $message->from('alerts@anchm.com');
        $message->to('brooks@21stcenturymoves.com');
        $message->subject('MORE INFORMATION REQUESTED!');
      });

    }

    public function requestInfoHome(Request $request){
      $text = $request->first_name.' '.$request->last_name.' has requested more information. You can reach them at '. $request->email.' and '.$request->phone. '. COMMENTS: '.$request->comments;
      //add person to database

      $contact = ContactRequest::Create([
        'name' => $request->first_name.' '.$request->last_name,
        'email' => $request->email,
        'phone' => $request->phone.$request->carrier
        ]);


      Mail::raw($text,function($message){
        $message->from('alerts@anchm.com');
        $message->to('ROBrooks@ANCHM.com');
        $message->subject('MORE INFORMATION REQUESTED!');
      });

      return back();
    }
    //
    public function index(){
      return Alert::all();
    }

    public function store(Request $request){
      Artisan::call('notification:send', [
        'message' => $request->message
    ]);
    return back();
    }

    public function show(Alert $alert)
    {
      return $alert;
    }

    public function destroy(Alert $alert)
    {
      return response()->json(['deleted'=>$alert->delete()]);
    }
}
