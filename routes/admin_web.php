<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::middleware(['auth'])->group(function () {
    //
});

Route::group([
    'namespace' => 'Admin',
    // 'middleware' => 'auth',
], function () {
    Route::get('/', function () {
        return view('layouts.admin.pages.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('layouts.admin.pages.dashboard');
    });
});

Route::get('/profile', function(){
    return __('Profile');
})->name('web.profile.get.home');

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales')))
    {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('setlocale');
