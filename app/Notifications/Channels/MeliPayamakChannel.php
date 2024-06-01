<?php

namespace App\Notifications\Channels;

use App\Helper\SendSms;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class MeliPayamakChannel extends Notification implements ShouldQueue
{
    use Queueable;

    public function send($notifiable, Notification $notification)
    {
        try {
            $text = $notification->data['message'];
            $text = str_replace("%name%", $notifiable->name, $text);
            SendSms::normal($notifiable->phone, $text);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }
}
