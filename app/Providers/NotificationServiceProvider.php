<?php

namespace App\Providers;

use App\Notifications\Channels\MeliPayamakChannel;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->make(ChannelManager::class)->extend('melipayamak', function ($app) {
            return new MeliPayamakChannel();
        });
    }
}
