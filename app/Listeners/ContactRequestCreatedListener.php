<?php

namespace App\Listeners;

use App\Events\ContactRequestCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequestCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactRequestCreated  $event
     * @return void
     */
    public function handle(ContactRequestCreated $event)
    {
        //
    }
}
