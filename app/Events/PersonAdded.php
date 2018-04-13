<?php

namespace App\Events;

use App\People;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PersonAdded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $people;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(People $people)
    {
        $this->people = $people;
    }

 
}
