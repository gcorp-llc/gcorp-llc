<?php
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['firewall.all','throttle:100,60']], function () {
    /**User Auth Panel**/
    Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
        Route::get('profile', \App\Livewire\User\Profile::class)->name('user.profile');
        Route::get('projects', \App\Livewire\User\Projects::class)->name('user.projects');
        Route::get('activity', \App\Livewire\User\Activity::class)->name('user.activity');
        Route::get('payments', \App\Livewire\User\Payments::class)->name('user.payments');
        Route::get('setting', \App\Livewire\User\Setting::class)->name('user.setting');
        Route::get('tickets', \App\Livewire\User\Tickets::class)->name('user.tickets');
    });
});
