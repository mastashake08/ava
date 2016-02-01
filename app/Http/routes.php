<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::post('register-device', function(\Illuminate\Http\Request $request){
	\Log::info(
	'request', $request->all()
);
	foreach($request->_push->android_tokens as $token){
	App\DeviceToken::Create(['token'=>$token]);
}
});
Route::get('/', function () {
	return view('spark::welcome');
});

Route::post('contact-requested', 'ContactRequestController@store');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::get('home', ['middleware' => 'auth', function () {
        return view('home');
    }]);
});
