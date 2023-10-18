<?php

use AdityaDees\LaravelBard\LaravelBard;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('bard', function () {

    $bard = (new LaravelBard());
    $bard->get_answer('hello whats your name');
    dd($bard["content"]);
});
Route::get('sitemap.xml', [SitemapController::class, 'index']);
Route::group(['middleware' => 'firewall.all'], function () {
    //    Home  Page
    Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
    //    Products Manager
    Route::get('/services', \App\Livewire\Pages\Services::class)->name('services');
    Route::get('/service/{slug}', \App\Livewire\Pages\Show\Service::class)->name('service-show');

    //    Products Manager
    Route::get('/products', \App\Livewire\Pages\Products::class)->name('products');
    Route::get('/product/{slug}', \App\Livewire\Pages\Show\Product::class)->name('product-show');
    //    Article Manager
    Route::get('/articles', \App\Livewire\Pages\Articles::class)->name('articles');
    Route::get('/article/{slug}', \App\Livewire\Pages\Show\Article::class)->name('article-show');
    //    Sample Manager
    Route::get('/samples', \App\Livewire\Pages\Samples::class)->name('samples');
    Route::get('/sample/{slug}', \App\Livewire\Pages\Show\Sample::class)->name('sample-show');
    //    Faq Page
    Route::get('/faq', \App\Livewire\Pages\Faq::class)->name('faq');
    //    About Us Page
    Route::get('/about-us', \App\Livewire\Pages\AboutUs::class)->name('about-us');

Route::middleware('guest')->group(function () {
    //Authentication
    Route::get('sign-up', \App\Livewire\Auth\SignUp::class)->name('sign-up');
    Route::get('sign-in', \App\Livewire\Auth\SignIn::class)->name('sign-in');

    Route::get('two-factor/{phone}', \App\Livewire\Auth\TwoFactor::class)->name('two-factor');

    Route::get('reset-password', \App\Livewire\Auth\ResetPassword::class)->name('reset-password');
    Route::get('new-password', \App\Livewire\Auth\NewPassword::class)->name('new-password');


    /**Auth Laravel Socialite **/
    Route::get('auth/{provider}/redirect',[\App\Http\Controllers\AuthController::class,'redirect'])->name('auth.redirect');
    Route::get('auth/{provider}/callback',[\App\Http\Controllers\AuthController::class,'callback'])->name('auth.callback');

});

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
