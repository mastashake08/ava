<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artisan;
class AlertController extends Controller
{
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
}
