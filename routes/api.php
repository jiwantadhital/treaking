<?php

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\backend\BookedTicketController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});
Route::post('/register', [\App\Http\Controllers\API\AuthController::class,'register']);
Route::post('/login', [\App\Http\Controllers\API\AuthController::class,'login']);
Route::post('/verifyPin', [\App\Http\Controllers\API\AuthController::class,'verifyPin']);
// Route::get('/send-sms-notification', [\App\Http\Controllers\NotificationController::class, 'sendSmsNotificaition']);
Route::put('/user/{id}',[\App\Http\Controllers\API\AuthController::class,'updatwEmail']);

// google login
Route::post('/requestTokenGoogle',[\App\Http\Controllers\API\AuthController::class,'requestTokenGoogle']);

//update profile
Route::put('/update/profile/{id}',[\App\Http\Controllers\API\AuthController::class,'editProfile']);

//Route::post('login', [\App\Http\Controllers\API\APIController::class, 'login']);
//Route::get('notice',[\App\Http\Controllers\API\APIController::class,'notice']);
//Route::Post('notice_save',[\App\Http\Controllers\API\APIController::class,'notice_save']);
//email
Route::get('/sendemail', [\App\Http\Controllers\API\AuthController::class, 'basic_email']);
Route::post('/forgot/sendOtp', [\App\Http\Controllers\API\AuthController::class, 'sendOtp']);
Route::post('/forgot/resendOtp', [\App\Http\Controllers\API\AuthController::class, 'resedOtp']);
Route::post('/changePassword', [\App\Http\Controllers\API\AuthController::class, 'changePassword']);





Route::group(['middleware'=>'auth:sanctum'],function(){


//destinations
Route::get('/destination/showAll', [\App\Http\Controllers\backend\DestinationController::class, 'showAll']);
// Categories
Route::get('/categories/showAll', [\App\Http\Controllers\backend\CategoryController::class, 'showAll']);

//destination images
Route::get('/destinationImages/showAll/{id}', [\App\Http\Controllers\backend\DestinationController::class, 'imageShowAll']);
Route::post('/booked_tickets',[BookedTicketController::class,'store']);

});
