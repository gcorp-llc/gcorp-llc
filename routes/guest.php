<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['firewall.all', 'guest', 'throttle:100,60']], function () {
    //Authentication
    Route::get('sign-up', \App\Livewire\Auth\SignUp::class)->name('sign-up');
    Route::get('sign-in', \App\Livewire\Auth\SignIn::class)->name('sign-in');
    Route::get('dr-login', \App\Livewire\Auth\DrLogin::class)->name('dr-login');

    Route::get('two-factor/{phone}', \App\Livewire\Auth\TwoFactor::class)->name('two-factor');

    Route::get('reset-password', \App\Livewire\Auth\ResetPassword::class)->name('reset-password');
    Route::get('new-password', \App\Livewire\Auth\NewPassword::class)->name('new-password');

    /**Auth Laravel Socialite **/
    Route::get('auth/{provider}/redirect', [\App\Http\Controllers\AuthController::class, 'redirect'])->name('auth.redirect');
    Route::get('auth/{provider}/callback', [\App\Http\Controllers\AuthController::class, 'callback'])->name('auth.callback');

});
