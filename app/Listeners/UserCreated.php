<?php

namespace App\Listeners;

use App\ {
    Events\UserCreated as UserCreatedEvent,
    Notifications\UserCreated as SendNotificationUserCreated,
    User
};
use App\Role;

use Illuminate\Support\Facades\Notification;

class UserCreated
{


    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        

        Notification::send(User::select('id')->where('name', 'super_admin')->first(), new SendNotificationUserCreated($event->user));
    }
}
