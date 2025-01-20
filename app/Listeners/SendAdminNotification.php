<?php

namespace App\Listeners;

use App\Events\NewUserRegistered;
use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Mail;

class SendAdminNotification
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
    public function handle(NewUserRegistered $event)
    {
        FacadesLog::info('New user registered: ' . $event->user);
        //
        $adminEmail = 'aaron.nevalinz421@gmail.com';

        try {
            Mail::to($adminEmail)->send(new NewUserNotification($event->user));
            FacadesLog::info('Email sent to admin: ' . $adminEmail);
        } catch (\Exception $e) {
            FacadesLog::error('Error sending email: ' . $e->getMessage());
        }
    }
}
