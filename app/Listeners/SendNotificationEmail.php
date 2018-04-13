<?php

namespace App\Listeners;

use App\People;

use App\Events\PersonAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotificationEmail
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
     * @param  PersonAdded  $event
     * @return void
     */
    public function handle(PersonAdded $event)
    {
        //

        \Log::info('activation', ['people'=>$event->people]);
    }
}
