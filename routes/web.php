<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function () {
    Route::namespace('Admin')->group(function () {
        // auth
        Route::get('login', 'AuthController@showLoginForm')->name('admin.login');
        Route::post('login', 'AuthController@login')->name('admin.login.post');
        Route::get('logout', 'AuthController@logout')->name('admin.logout')->middleware('auth:admin');
    });
});

Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth:admin')->group(function () {
    Route::get('/change-password', 'AuthController@showChangePasswordForm')->name('change-password.form');
    Route::post('/change-password', 'AuthController@changePassword')->name('change-password');
    Route::resource('admins', 'AdminController');
    
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('emails', 'HomeController@emails')->name('emails.index');
    Route::get('emails.send', 'HomeController@emails_send')->name('emails.send');
    Route::get('emails/{email}/edit', 'HomeController@edit')->name('emails.edit');
    Route::get('emails/{email}/show', 'HomeController@show')->name('emails.show');
    Route::patch('emails/{email}/update', 'HomeController@update')->name('emails.update');
    Route::delete('emails/{email}/destroy', 'HomeController@destroy')->name('emails.destroy');
    Route::post('emails/{email}/review', 'HomeController@admin_review_post')->name('review.post');

});

Route::namespace('User')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('code/check', 'HomeController@code_check')->name('code.check');
    Route::post('code/check', 'HomeController@code_check_post')->name('code.check.post');
    Route::post('/email/check', 'HomeController@email_check')->name('check.email');


    Route::get('form', 'HomeController@form')->name('form');
    Route::post('form', 'HomeController@form_store')->name('form.store');

    Route::get('success', 'HomeController@success')->name('success');

    
});
