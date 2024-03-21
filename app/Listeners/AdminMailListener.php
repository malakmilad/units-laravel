<?php

namespace App\Listeners;

use App\Events\AdminMailEvent;
use App\Mail\AdminMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class AdminMailListener
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
    public function handle(AdminMailEvent $event): void
    {
        Mail::to($event->submission->contactForm->email)->send(new AdminMail($event->submission));
    }
}
