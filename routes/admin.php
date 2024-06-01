<?php

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('analytical/shortcut/{id}', [\App\Http\Controllers\AnalyticalController::class, 'shortcut'])->name('analytical.shortcut');
    Route::get('advertising/{id}', [\App\Http\Controllers\AdvertisingController::class, 'sendAdvertising'])->name('send.Advertising');
    Route::get('excel',function (){
        return Excel::download(new UsersExport, 'users.xlsx');
    });
});
