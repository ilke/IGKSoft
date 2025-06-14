<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::post('iyzico/redirect', [
        \Webkul\Payment\Http\Controllers\IyzicoController::class,
        'redirect',
    ])->name('iyzico.redirect');

    Route::post('iyzico/callback', [
        \Webkul\Payment\Http\Controllers\IyzicoController::class,
        'callback',
    ])->name('iyzico.callback');
});
