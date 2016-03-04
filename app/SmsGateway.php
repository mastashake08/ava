<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsGateway extends Model
{
    //
    protected $fillable = [
      'name',
      'address'
    ];

    protected $table = 'sms_gateways';
}
