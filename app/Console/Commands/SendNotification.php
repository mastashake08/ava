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
$tokens = DeviceToken::all('token')->pluck('token');
\Log::info('Tokens', $tokens->toArray());
$fields = array
(
	"tokens"=> $tokens,
  "notification" => [
    'alert' => $this->argument('message')]
);

$headers = array
(
	'X-Ionic-Application-Id: 35509efc',
	'Content-Type: application/json'
);
$username='9303a1f837866e215c8b69e4860b1aefe6d73853eab5a36c';
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://push.ionic.io/api/v1/push' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt($ch, CURLOPT_USERPWD, "$username");
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result;
    }
}
