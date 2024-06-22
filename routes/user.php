<?php

use App\Http\Controllers\User\BilanController;
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
Route::get('/home', [BilanController::class, 'create'])->name('home.create');
Route::post('/bilan/store', [BilanController::class, 'store'])->name('bilan.store');
Route::get('/get-communes/{wilaya}', [BilanController::class, 'getCommunes']);

});
