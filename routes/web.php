<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtablishmentController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipationController;

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

//Route of etablishments
Route::get('/establishments',[AdminController::class,'establishment']);
Route::get('/establishments/create',[AdminController::class,'establishmentCreate']);
Route::post('/establishments/store', [AdminController::class,'establishmentStore']);
Route::get('/establishments/{id}/edit',[AdminController::class,'establishmentEdit']);
Route::put('/establishments/{id}/update', [AdminController::class,'establishmentUpdate']);
Route::delete('/establishments/{id}',[AdminController::class,'establishmentDestroy']);


Auth::routes();

//Route of participation
Route::get('/participation',[AdminController::class,'participation']);
Route::get('/participation/create',[ParticipationController::class, 'create']);
Route::post('/participation/store',[ParticipationController::class, 'store']);
Route::get('/participation/{id}/edit',[ParticipationController::class,'edit']);
Route::put('/participation/{id}/update', [ParticipationController::class,'update']);
Route::delete('/participation/{id}',[ParticipationController::class,'destroy']);

//Route of feedback
Route::get('/feedback', [AdminController::class,'feedback']);
Route::get('/feedback/create',[FeedbackController::class,'create']);
Route::post('/feedback/store',[FeedbackController::class,'store']);
Route::get('/feedbacks/{id}',[AdminController::class,'feedbackShow']);
Route::delete('/feedback/{id}',[FeedbackController::class, 'destroy']);

//Route of admin
Route::get('/admin',[AdminController::class,'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
