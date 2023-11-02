<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BookedTicketController;
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
    return view('auth/login');
});
Auth::routes();
Route::group(['prefix'=>'/admin','as'=>'admin.'],function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',CategoryController::class);
Route::resource('destination',DestinationController::class);
Route::resource('booked_tickets',BookedTicketController::class);


});









