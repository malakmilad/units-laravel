<?php

namespace App\Listeners;

use App\Events\AdminSmsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;

class AdminSmsListener
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
    public function handle(AdminSmsEvent $event)
    {
        $basic = new Basic("49e79ba2", "9bxYw2Iwc6x6gEjb");
        $client = new Client($basic);
        $response = $client->sms()->send(
            new SMS(
                "201224966391",
                'Welcome',
                'UserName: '.$event->submission->user->name .''.' Submit Form:'.$event->submission->contactForm->title,
            )
        );
        $message = $response->current();
        if ($message->getStatus() == 0) {
            return response()->json(['message' => 'The message was sent successfully'], 200);
        } else {
            return "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
