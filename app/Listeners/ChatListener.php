<?php

namespace App\Listeners;

use App\Events\ChatSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChatListener
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
     * @param  ChatSent  $event
     * @return void
     */
    public function handle(ChatSent $event)
    {
        //
    }
}
