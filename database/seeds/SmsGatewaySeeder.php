<?php

use Illuminate\Database\Seeder;
use App\SmsGateway;
class SmsGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SmsGateway::Create([
          'name' => 'Sprint',
          'address' => '@messaging.sprintpcs.com'
          ]);
        SmsGateway::Create([
          'name' => 'AT&T',
          'address' => '@txt.att.net'
          ]);
          SmsGateway::Create([
            'name' => 'T-Mobile',
            'address' => '@tmomail.net'
            ]);
            SmsGateway::Create([
              'name' => 'Verizon',
              'address' => '@vtext.com'
              ]);
        SmsGateway::Create([
          'name' => 'MetroPCS',
          'address' => '@messaging.sprintpcs.com'
          ]);
        SmsGateway::Create([
          'name' => 'Cricket',
          'address' => '@sms.mycricket.com'
          ]);


    }
}
