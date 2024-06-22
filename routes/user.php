<?php

use App\Http\Controllers\User\EvaluationController;
use App\Http\Controllers\User\HomeController;
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
Route::group(['middleware' => ['role:User', 'auth']], function () {
Route::get('/',  [HomeController::class, 'index'])->name('user.home');
Route::view('profile', 'profile')->name('profile');
Route::get('/home', [EvaluationController::class, 'create'])->name('home.create');
Route::post('/evaluation/store', [EvaluationController::class, 'store'])->name('evaluation.store');
Route::get('/get-communes/{wilaya}', [EvaluationController::class, 'getCommunes']);

});
