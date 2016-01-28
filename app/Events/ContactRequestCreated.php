<?php

namespace App\Events;
use App\ContactRequest;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ContactRequestCreated extends Event
{
    use SerializesModels;
    public $contactRequest;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $contactRequest)
    {
        //
        $this->contactRequest = $contactRequest;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
