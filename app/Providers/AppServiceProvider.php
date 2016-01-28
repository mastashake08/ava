<?php

namespace App\Providers;
use App\ContactRequest;
use Illuminate\Support\ServiceProvider;
use App\Event\ContactRequestCreated;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //fire email event after request is made
        ContactRequest::Created(function($contactRequest){
          event(new ContactRequestCreated($contactRequest));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
