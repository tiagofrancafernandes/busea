<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();//./vendor/laravel/ui/src/AuthRouteMethods.php (+- 19)

Route::get('/', function () {
    return view('layouts.busea.app');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('web.auth.get.logout');
Route::get('/account_created', 'Auth\RegisterController@account_created')->name('web.auth.post.account_created');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales')))
    {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('setlocale');
