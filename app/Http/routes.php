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
Route::post('request-more-info', 'AlertController@requestInfo');
Route::post('register-device', function(\Illuminate\Http\Request $request){
	\Log::info(
	'request', $request->all()
);

	App\DeviceToken::Create(['token'=>$request->token]);

});
Route::get('seed-front-page','FrontPageController@index');
Route::post('new-front-page-lit','FrontPageController@store');
Route::get('/', function () {
	//return view('spark::welcome');
	$frontPage = \App\FrontPageLit::find(1);
		return view('index2')->with(['frontPage' => $frontPage]);
});
Route::resource('alert','AlertController');
Route::post('contact-requested', 'ContactRequestController@store');
Route::get('enrollment-forms', function(){
	$path = public_path('download-forms').'/enrollment-forms.zip';
	return response()->download($path);
});
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

Route::resource('notification','AlertController');
Route::group(['middleware' => 'web'], function () {
    Route::get('home', ['middleware' => 'auth', function () {
			$frontPage = \App\FrontPageLit::find(1);
        return view('home')->with(['frontPage' => $frontPage]);
    }]);
});
