<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamansController;
use App\Http\Controllers\CropsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RolesController;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('feedback', FeedbackController::class);
Route::resource('request', RequestController::class);

Route::resource('roles', RolesController::class);
Route::resource('tanamans', TanamansController::class);
Route::resource('crops', CropsController::class);
