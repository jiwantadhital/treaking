<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\QuestionyearController;
use App\Http\Controllers\backend\SemesterController;
use App\Http\Controllers\backend\SubjectController;
use App\Http\Controllers\backend\SyllabusController;
use App\Http\Controllers\backend\QuestionbankController;
use App\Http\Controllers\backend\CollegeyearController;
use App\Http\Controllers\backend\CollegequestionController;
use App\Http\Controllers\backend\SolutionController;
use App\Http\Controllers\backend\LabController;
use App\Http\Controllers\backend\NotesController;
use App\Http\Controllers\backend\ChapterController;
use App\Http\Controllers\backend\CollegeController;
use App\Http\Controllers\backend\CommentController;
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


});









