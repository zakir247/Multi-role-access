<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth','user']],function(){
    Route::get('/user', 'User\UserDashboardController@index')->name('user');
});
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/account', 'Admin\DashboardController@accounts_view')->name('account');
    Route::get('/hr', 'Admin\DashboardController@hr_view')->name('hr');
    Route::get('/purchase', 'Admin\DashboardController@purchase_view')->name('purchase');
});
Route::group(['middleware'=>['auth','accounts']],function (){
    Route::get('/account.dashboard', 'Admin\AccountsController@index')->name('account.dashboard');
});
Route::group(['middleware'=>['auth','hr']],function (){
    Route::get('/hr.dashboard', 'Admin\HRController@index')->name('hr.dashboard');
});
Route::group(['middleware'=>['auth','purchase']],function (){
    Route::get('/purchase.dashboard', 'Admin\PurchaseController@index')->name('purchase.dashboard');
});

