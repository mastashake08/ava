<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DeviceToken;
class SendNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send A Notification To All Mobile Users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /*
        curl -u YOUR_SECRET_KEY: -H "Content-Type: application/json" -H "X-Ionic-Application-Id: YOUR_APP_ID" https://push.ionic.io/api/v1/push -d '{"tokens": ["YOUR_TOKEN"],"notification":{"alert":"Hello world."}}'
        */

$fields = array
(
	"tokens"=> DeviceToken::all('token'),
  "notification" => $this->argument('message')
);

$headers = array
(
	'X-Ionic-Application-Id: 35509efc',
	'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://push.ionic.io/api/v1/push' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result;
    }
}
