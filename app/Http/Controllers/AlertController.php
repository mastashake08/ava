<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alert;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlertController extends Controller
{
    //
    public function index(){
      return Alert::all();
    }
}
