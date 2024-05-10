<?php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Mail\PostCreatedMail;
use App\Models\PostLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class HandlePostCreated
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostCreated $event): void
    {
        //
         // Log the creation
         PostLog::create([
            'post_id' => $event->post->id,
            'action' => 'created'
        ]);

        // Send email
        Mail::to('example@example.com')->send(new PostCreatedMail($event->post));
    }
}
