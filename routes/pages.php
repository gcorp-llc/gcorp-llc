<?php

use Illuminate\Support\Facades\Route;

Route::get('chat', function () {
    return "hello";
    \App\Jobs\LocalisationJob::dispatch();
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        "Authorization" => "Bearer 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"
    ])
        ->post('https://api.openai.com/v1/chat/completions', [
            "model" => "gpt-3.5-turbo",
            "messages" => [
                [
                    "role" => "user",
                    "content" => "You are a helpful assistant."
                ]
            ],
            'temperature' => 0.5,
            'max_token' => 2000,
        ])
        ->json();
    dd($response);
    return $response['choices'][0]['message']['content'];
});

Route::get('/greeting/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'fa', 'ar'])) {
        abort(400);
    }
    App::setLocale($locale);
    return back();
});

Route::group(['middleware' => ['firewall.all','throttle:100,60']], function () {

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

    //Shortcuts
    Route::get('/s/{code}', function (string $code) {
        $shortcut = \App\Models\Shortcut::firstWhere(['code' => $code]);
        if (empty($shortcut)) return abort(404);
        $view = $shortcut->view + 1;
        $shortcut->update([
            'view' => $view
        ]);
        return redirect($shortcut->url, 301);
    });

    //Analytical
    Route::get('/analytical/{slug}', \App\Livewire\Analytical::class)->name('analytical');

    //Pages
    Route::get('/pages/{slug}', \App\Livewire\Analytical::class)->name('pages');

    /** Show Doctor Page **/
    Route::get('dr/{slug}', \App\Livewire\Pages\DrShow::class)->name('dr.show');
});
