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
        $gateways = [
          ['name' => 'Sprint',
          'address' => '@messaging.sprintpcs.com'
          ],
          [
            'name' => 'AT&T',
            'address' => '@txt.att.net'
          ],
          [
            'name' => 'T-Mobile',
            'address' => '@tmomail.net'
          ],
          [
            'name' => 'Verizon',
            'address' => '@vtext.com'
          ],
          [
            'name' => 'MetroPCS',
            'address' => '@messaging.sprintpcs.com'
          ],
          [
            'name' => 'Cricket',
            'address' => '@sms.mycricket.com'
          ],
          [
            'name' => '3 River Wireless',
            'address' => '@sms.3rivers.net'
          ],
          [
            'name' => 'ACS Wireless',
            'address' => '@paging.acswireless.com'
          ],
          [
            'name' =>'Alltel',
            'address' => '@message.alltel.com'
          ]
        ];
        foreach($gateways as $gateway){
        SmsGateway::Create([
          'name' => $gateway['name'],
          'address' => $gateway['address']
          ]);
        }


    }
}
