<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ContactRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactRequestController extends Controller
{
    //
    public function store(Request $request){
      //VALIDATE
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required'
        ]);

        return ContactRequest::Create($request->all());
    }
}
