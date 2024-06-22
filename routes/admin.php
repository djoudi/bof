<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\Admin\HomeController;
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

Route::group(['middleware' => ['role:Admin', 'auth']], function () {
Route::get('/home',  [HomeController::class, 'index'])->name('admin.home');Route::get('/dash', [HomeController::class, 'dash'])->name('home.dash');
Route::get('/get-wilaya-data/{wilaya_id}', [HomeController::class, 'getWilayaData'])->name('home.wdata');
Route::get('/copy-data', [HomeController::class, 'copyData'])->name('copy-data');

//Route::post('/evaluation/store', [EvaluationController::class, 'store'])->name('evaluation.store');
});
