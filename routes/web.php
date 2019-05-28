<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => 'auth'], function () {


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard', '\App\Http\Controllers\Auth\Home@dashboard');

Route::get('/manage-users', [
    'as' => 'manage_user', 'uses' => '\App\Http\Controllers\Auth\Home@view_users'
]);

Route::get('/manage/invoices', [
    'as' => 'manage.invoices', 'uses' => '\App\Http\Controllers\InvoiceController@manageInvoices'
]);

Route::get('/invoice', function () {
    return view('invoices');
});

});

Route::post('/registering', [
    'as' => 'register', 'uses' => '\App\Http\Controllers\Auth\RegisterController@register'
]);

Route::post('/save/invoice/', [
    'as' => 'submit.invoice', 'uses' => '\App\Http\Controllers\InvoiceController@saveInvoice'
]);

Route::get('/register/login', function () {
    return view('auth/reg_or_login');
});

Route::get('/', function () {
    return view('auth/login');
});






