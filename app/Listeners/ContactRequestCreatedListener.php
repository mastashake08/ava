<?php

namespace App\Listeners;
use Illuminate\Contracts\Mail\Mailer;
use App\Events\ContactRequestCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequestCreatedListener
{

  public $mailer;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        //
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  ContactRequestCreated  $event
     * @return void
     */
    public function handle(ContactRequestCreated $event)
    {
        //send to patron
        $this->mailer->send('emails.contact-requested',['request' => $event->contactRequest], function ($m) use($event){
          $m->from(env('MAIL_ADDRESS'), 'AVA');
            $m->to($event->contactRequest->email, $event->contactRequest->name)->subject('Your Contact Request!');
        });

        //send to admin
        $this->mailer->send('emails.admin-contact-requested',['request' => $event->contactRequest], function ($m) use($event){
          $m->from(env('MAIL_ADDRESS'), 'AVA');
            $m->to(env('MAIL_ADDRESS'), env('MAIL_NAME'))->subject('New Contact Request!');
        });
    }
}
